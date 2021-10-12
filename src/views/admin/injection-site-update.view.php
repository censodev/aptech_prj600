<form method="post" class="d-flex flex-column gap-2">
    <input hidden name="id" value="<?php echo $injection_site['id'] ?>">
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Tên điểm tiêm</label>
            <input class="form-control" name="name" required value="<?php echo $injection_site['name'] ?>">
        </div>
        <div class="flex-grow-1">
            <label class="label">Trạng thái</label>
            <select class="form-select" name="status" required>
                <option value="1" <?php echo 1 == $injection_site['status'] ? 'selected' : '' ?>>Đang hoạt động</option>
                <option value="0" <?php echo 0 == $injection_site['status'] ? 'selected' : '' ?>>Dừng hoạt động</option>
            </select>
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Tỉnh/Thành phố</label>
            <select class="form-select" name="province_id" required>
                <?php foreach ($provinces as $p): ?>
                    <option value="<?php echo $p['id'] ?>"
                        <?php echo $p['id'] == $injection_site['province_id'] ? 'selected' : '' ?>>
                        <?php echo $p['name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label">Quận/Huyện</label>
            <select class="form-select" name="district_id" required>
                <?php foreach ($districts as $d): ?>
                    <option value="<?php echo $d['id'] ?>"
                        <?php echo $d['id'] == $injection_site['district_id'] ? 'selected' : '' ?>>
                        <?php echo $d['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">
        <button class="btn btn-primary">Cập nhật</button>
    </div>
</form>
<script>
    const url = '<?php echo Helper::url('api/master/district') ?>'
    document.querySelector('select[name=province_id]').addEventListener('change', e => {
        fetch(`${url}?province_id=${e.target.value}`)
            .then(res => res.json())
            .then(data => {
                document.querySelector('select[name=district_id]').innerHTML = data.reduce((acc, cur) => {
                    return acc + `<option value="${cur.id}">${cur.name}</option>`
                }, '')
            })
    })
</script>