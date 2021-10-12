<div class="d-flex flex-column gap-2">
    <h4>Thông tin cá nhân</h4>
    <input hidden name="id" value="value="<?php echo $profile['id'] ?>"">
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Họ và tên</label>
            <input class="form-control" name="full_name" value="<?php echo $profile['full_name'] ?>" required>
        </div>
        <div class="flex-grow-1">
            <label class="label">CCCD/CMND</label>
            <input class="form-control" name="identity_card" value="<?php echo $profile['identity_card'] ?>" required>
        </div>
        <div class="flex-grow-1">
            <label class="label">Giới tính</label>
            <div class="d-flex">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="1"
                        <?php echo 1 == $profile['gender'] ? 'checked' : '' ?>>
                    <label class="form-check-label">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="0"
                        <?php echo 0 == $profile['gender'] ? 'checked' : '' ?>>
                    <label class="form-check-label">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="2"
                        <?php echo 2 == $profile['gender'] ? 'checked' : '' ?>>
                    <label class="form-check-label">Khác</label>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Quốc gia</label>
            <select class="form-select" name="country_id" required>
                <?php foreach ($countries as $v): ?>
                    <option value="<?php echo $v['id'] ?>"
                        <?php echo $v['id'] == $profile['country_id'] ? 'selected' : '' ?>>
                        <?php echo $v['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label">Dân tộc</label>
            <select class="form-select" name="nation_id" required>
                <?php foreach ($nations as $v): ?>
                    <option value="<?php echo $v['id'] ?>"
                        <?php echo $v['id'] == $profile['nation_id'] ? 'selected' : '' ?>>
                        <?php echo $v['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label">Ngày sinh</label>
            <input class="form-control" type="date" name="birthday" value="<?php echo $profile['birthday'] ?>" required>
        </div>
        <div class="flex-grow-1">
            <label class="label">Số điện thoại</label>
            <input class="form-control" name="phone" value="<?php echo $profile['phone'] ?>" required>
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Nghề nghiệp</label>
            <input class="form-control" name="career" value="<?php echo $profile['career'] ?>">
        </div>
        <div class="flex-grow-1">
            <label class="label">Đơn vị công tác</label>
            <input class="form-control" name="workspace" value="<?php echo $profile['workspace'] ?>">
        </div>
    </div>
    <div class="d-flex gap-2">
        <div class="flex-grow-1">
            <label class="label">Địa chỉ nơi ở hiện tại</label>
            <select class="form-select" name="province_id" required>
                <?php foreach ($provinces as $v): ?>
                    <option value="<?php echo $v['id'] ?>"
                        <?php echo $v['id'] == $profile['province_id'] ? 'selected' : '' ?>>
                        <?php echo $v['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label"></label>
            <select class="form-select" name="district_id" required>
                <?php foreach ($districts as $v): ?>
                    <option value="<?php echo $v['id'] ?>"
                        <?php echo $v['id'] == $profile['district_id'] ? 'selected' : '' ?>>
                        <?php echo $v['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label"></label>
            <select class="form-select" name="ward_id" required>
                <?php foreach ($wards as $v): ?>
                    <option value="<?php echo $v['id'] ?>"
                        <?php echo $v['id'] == $profile['ward_id'] ? 'selected' : '' ?>>
                        <?php echo $v['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="flex-grow-1">
            <label class="label"></label>
            <input class="form-control" name="address" value="<?php echo $profile['address'] ?>" required>
        </div>
    </div>
    <?php if ($profile['status'] == ProfileStatus::CREATED): ?>
        <div class="d-flex gap-2 justify-content-center mt-2">
            <a href="<?php echo Helper::url('admin/profile/reject?id=' . $profile['id']) ?>"
               class="btn btn-danger">Từ chối tiêm</a>
            <a href="<?php echo Helper::url('admin/profile/check-in?id=' . $profile['id']) ?>"
               class="btn btn-primary">Xác nhận đã tới điểm tiêm</a>
        </div>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::CHECKED_IN): ?>
        <?php
        $screens = [
            '1. Bệnh cấp tính đang mắc',
            '2. Tiền sử dị ứng',
            '3. Tiền sử dị ứng',
            '4. Tiền sử tiêm vắc xin khác trong 14 ngày qua',
            '5. Tiền sử bị COVID-19 trong vòng 6 tháng',
            '6. Tiền sử điều trị huyết tương từ người đã được điều trị khỏi COVID-19 hoặc immunoglobulin trong vòng 90 ngày',
            '7. Tiền sử suy giảm miễn dịch, ung thư, cắt lách, đang dùng thuốc ức chế miễn dịch, corticoid liều cao (tương đương hoặc hơn 2mg prednisolon/kg/ngày trong ít nhất 7 ngày)',
            '8. Tiền sử rối loạn đông máu/cầm máu hoặc đang dùng thuốc chống đông',
            '9. Đang mang thai, phụ nữ đang nuôi con bằng sữa mẹ',
            '10.Bất thường dấu hiệu sống',
            '11.Dấu hiệu bất thường khi nghe tim phổi',
            '12.Rối loạn tri giác',
        ];
        ?>
        <hr/>
        <h4>Khám sàng lọc</h4>
        <form method="post" action="<?php echo Helper::url('admin/profile/screen-test?id=' . $profile['id']) ?>">
            <table class="table table-bordered">
                <?php foreach ($screens as $k => $v): ?>
                    <tr>
                        <td><?php echo $v ?></td>
                        <td>
                            <label class="form-check-label">Không</label>
                            <input class="form-check-input" type="radio" name="screens[<?php echo $k ?>]" value="0"
                                   checked>
                        </td>
                        <td>
                            <label class="form-check-label">Có</label>
                            <input class="form-check-input" type="radio" name="screens[<?php echo $k ?>]" value="1">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <ul>
                <li>Chống chỉ định tiêm chủng vắc xin cùng loại (Khi <b>CÓ</b> điểm bất thường tại mục 3)</li>
                <li>Trì hoãn tiêm chủng (Khi <b>CÓ</b> bất kỳ một điểm bất thường tại các mục 1, 4, 5, 6, 7, 8, 9)</li>
                <li>Chuyển tiêm chủng và theo dõi tại bệnh viện (Khi <b>CÓ</b> tại các mục 2, 10, 11, 12)</li>
            </ul>
            <div class="d-flex gap-2 justify-content-center mt-2">
                <a href="<?php echo Helper::url('admin/profile/reject?id=' . $profile['id']) ?>"
                   class="btn btn-danger">Không đủ điều kiện tiêm</a>
                <button class="btn btn-primary">Xác nhận đủ điều kiện tiêm</button>
            </div>
        </form>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::SCREENED): ?>
        <hr/>
        <h4>Chỉ định vaccine</h4>
        <form method="post" action="<?php echo Helper::url('admin/profile/assign-vaccine?id=' . $profile['id']) ?>">
            <div class="d-flex gap-2">
                <div class="flex-grow-1">
                    <label class="label">Vaccine</label>
                    <select class="form-select" name="vaccine_id" required>
                        <option></option>
                        <?php foreach ($vaccines as $v): ?>
                            <option value="<?php echo $v['id'] ?>"
                                <?php echo $v['id'] == $profile['vaccine_id'] ? 'selected' : '' ?>>
                                <?php echo $v['name'] . ' - Lô ' . $v['lot'] . ' - Hạn ' . $v['expire_date'] . ' - Còn ' . ($v['doses'] - $v['consumed_doses']) . ' liều' ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="d-flex gap-2 justify-content-center mt-2">
                <a href="<?php echo Helper::url('admin/profile/reject?id=' . $profile['id']) ?>"
                   class="btn btn-danger">Từ chối tiêm</a>
                <button class="btn btn-primary">Xác nhận vaccine chỉ định tiêm</button>
            </div>
        </form>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::INJECTED): ?>
        <hr/>
        <h4>Kết quả theo dõi sau tiêm</h4>
        <div class="flex-grow-1">
            <label class="label">Triệu chứng/Dị ứng (nếu có)</label>
            <textarea class="form-control" name="symptom" rows="5"></textarea>
        </div>
        <div class="d-flex gap-2 justify-content-center mt-2">
            <button class="btn btn-danger">Ghi nhận phản ứng xấu</button>
            <button class="btn btn-primary">Xác nhận tiêm chủng thành công</button>
        </div>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::COMPLETED): ?>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::REJECTED): ?>
    <?php endif; ?>
    <?php if ($profile['status'] == ProfileStatus::FAILED): ?>
    <?php endif; ?>
</div>

<script>

</script>