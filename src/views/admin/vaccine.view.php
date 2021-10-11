<a class="btn btn-primary" href="<?php echo Helper::url('admin/vaccine-create') ?>">Thêm mới</a>
<table class="table">
    <thead>
    <tr>
        <th>Tên</th>
        <th>Số lô</th>
        <th>Số liều</th>
        <th>Số liều còn lại</th>
        <th>Ngày hết hạn</th>
        <th>Nhà sản xuất</th>
        <th>Nhà cung cấp</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($vaccines as $v): ?>
        <tr>
            <td><?php echo $v['name'] ?></td>
            <td><?php echo $v['lot'] ?></td>
            <td><?php echo $v['doses'] ?></td>
            <td><?php echo $v['doses'] - $v['consumed_doses'] ?></td>
            <td><?php echo $v['expire_date'] ?></td>
            <td><?php echo $v['producer'] ?></td>
            <td><?php echo $v['supplier'] ?></td>
            <td>
                <a href="<?php echo Helper::url('admin/vaccine-update?id=' . $v['id']) ?>" class="btn btn-primary">
                    <i data-feather="edit"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>