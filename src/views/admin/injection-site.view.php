<a class="btn btn-primary" href="<?php echo Helper::url('admin/injection-site-create') ?>">Thêm mới</a>
<table class="table mt-3">
    <thead>
    <tr>
        <th>Tên điểm tiêm</th>
        <th>Tỉnh/Thành phố</th>
        <th>Quận/Huyện</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($injectionSites as $v): ?>
        <tr>
            <td><?php echo $v['name'] ?></td>
            <td><?php echo $v['province_name'] ?></td>
            <td><?php echo $v['district_name'] ?></td>
            <td><?php echo InjectionSite::status($v['status']) ?></td>
            <td>
                <a href="<?php echo Helper::url('admin/injection-site-update?id=' . $v['id']) ?>" class="btn btn-primary">
                    <i data-feather="edit"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>