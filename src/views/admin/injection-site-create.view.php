<form method="post" class="d-flex flex-column gap-2">
    <div class="flex-grow-1">
        <label class="label">Tên điểm tiêm</label>
        <input class="form-control" name="name" required>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Tỉnh/Thành phố</label>
            <select class="form-select" name="province_id" required>
                <option></option>
                <?php foreach ($provinces as $p): ?>
                    <option value="<?php echo $p['id'] ?>"><?php echo $p['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label">Quận/Huyện</label>
            <select class="form-select" name="district_id" required></select>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">
        <button class="btn btn-primary">Tạo mới</button>
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