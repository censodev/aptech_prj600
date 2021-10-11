<form class="d-flex gap-2 flex-column">
    <div class="d-flex gap-2">
        <input hidden name="status" value="<?php echo $_GET['status'] ?>"/>
        <div class="flex-grow-1">
            <small class="text-secondary"><b>Điểm tiêm</b></small>
            <select class="form-select" name="injectionSite">
                <option>abc</option>
                <option>abc</option>
                <option>abc</option>
            </select>
        </div>
        <div>
            <small class="text-secondary"><b>Thời gian</b></small>
            <input class="form-control" type="date" name="date"/>
        </div>
    </div>
    <div class="d-flex gap-2">
        <input name="s" class="form-control" placeholder="Tìm kiếm">
        <button class="btn btn-primary">Lọc</button>
    </div>
</form>

<table class="table mt-4">
    <thead>
    <tr>
        <th>CCCD</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($profiles as $u): ?>
        <tr>
            <td><?php echo $u['identity_card'] ?></td>
            <td><?php echo $u['full_name'] ?></td>
            <td><?php echo $u['phone'] ?></td>
            <td><?php echo Profile::gender($u['gender']) ?></td>
            <td><?php echo $u['birthday'] ?></td>
            <td>
                <a href="<?php echo Helper::url('admin/profile?id=' . $u['id']) ?>" class="btn btn-primary">
                    <i data-feather="edit"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>