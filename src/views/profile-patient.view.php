<link rel="stylesheet" href="<?php

use DASPRiD\Enum\NullValue;

echo Helper::assets("css/injection-registration.css") ?>"
/>
<link rel="stylesheet" href="<?php echo Helper::assets('css/admin.css') ?>" />

<div class="container">
        <h4 style="margin-top:20px">Thông tin cá nhân</h4>
      <form method="post" class="row g-3" style="margin-bottom:20px">
        <div class="col-md-4">
          <label for="validationDefault01">Họ và tên</label>
          <input
            type="text"
            class="form-control"
            id="nameInp"
            name="full_name"
            value= "<?php echo $profile['full_name']?>"
            readonly
            required
          />
        </div>
        <div class="col-md-4">
          <label for="validationDefault02">CMND/CCCD</label>
          <input
            type="text"
            class="form-control"
            id="idInp"
            name="identity_card"
            value="<?php echo $profile['identity_card']?>"
            readonly
            required
          />
        </div>
        <div class="col-md-4">
          <label for="validationDefault02">Giới tính</label>
          <div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="gender"
                id="maleRadioBtn"
                value="1"
                <?php echo $profile['gender'] == 1 ?'checked' :'reaonly' ?>
                <?php echo $profile['gender'] == 1 ?'visible' :'disabled' ?>
              />
              <label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="gender"
                id="femaleRadioBtn"
                value="0"
                <?php echo $profile['gender'] == 0?'checked' :'reaonly' ?>
                <?php echo $profile['gender'] == 0 ?'visible' :'disabled' ?>
              />
              <label class="form-check-label" for="inlineRadio2">Nữ</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="gender"
                id="otherRadioBtn"
                value="2"
                <?php echo $profile['gender'] == 2?'checked' :'reaonly' ?>
                <?php echo $profile['gender'] == 2 ?'visible' :'disabled' ?>
              />
              <label class="form-check-label" for="inlineRadio2">Khác</label>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04">Quốc gia</label>
          <input
            type="text"
            class="form-control"
            id="countryInp"
            name="country"
            value="<?php echo $country?> "
            readonly
            required
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault03">Dân tộc</label>
          <input
            type="text"
            class="form-control"
            id="nationInp"
            name="nation"
            value="<?php echo $nation ?>"
            readonly
            required
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault05">Ngày sinh</label>
          <input
            type="text"
            class="form-control"
            id="birthdaytime"
            name="birthday"
            value="<?php echo $profile['birthday'] ?>"
            required
            readonly
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault02">Số điện thoại</label>
          <input
            type="text"
            class="form-control"
            id="phoneNumberInp"
            name="phone"
            value="<?php echo $profile['phone'] ?>"
            readonly
            required
          />
        </div>
        <div class="col-md-6">
          <label for="validationDefault01">Nghề nghiệp</label>
          <input
            type="text"
            class="form-control"
            id="jobInp"
            name="career"
            value="<?php echo $profile['career'] ?>"
            readonly
          />
        </div>
        <div class="col-md-6">
          <label for="validationDefault02">Đơn vị công tác</label>
          <input
            type="text"
            class="form-control"
            id="workplaceInp"
            name="workspace"
            value="<?php  echo $profile['workspace'] ?>"
            readonly
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault04">Tỉnh</label>
          <input
            type="text"
            class="form-control"
            id="provincesInp"
            name="provinces"
            value="<?php echo $province?>"
            readonly
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault03">Quận, huyện</label>
          <input
            type="text"
            class="form-control"
            id="districtInp"
            name="district"
            value="<?php echo $district ?>"
            readonly
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault03">Xã, phường</label>
          <input
            type="text"
            class="form-control"
            id="wardInp"
            name="ward"
            value="<?php echo $ward ?>"
            readonly
          />
        </div>
        <div class="col-md-3">
          <label for="validationDefault01">Địa chỉ cụ thể</label>
          <input
            type="text"
            class="form-control"
            id="SpecificCurrentAddressInp"
            name="address"
            value="<?php echo $profile['address']?>"
            readonly
            required
          />
        </div>
      </form>
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
      <?php if (isset($profile['screen_test'])) : ?>
         
          <h4>Khám sàng lọc</h4>
        <table class="table table-bordered" style="margin-top:20px" >
          <?php foreach ($screens as $k =>
          $v): ?>
          <tr>
            <td><?php echo $v ?></td>
            <td>
              <label class="form-check-label">Không</label>
              <input
                class="form-check-input"
                type="radio"
                name="screens[<?php echo $k ?>]"
                value="0"
                <?php echo $screenTest[$k]==0 ? 'checked':'' ?>
                disabled
              />
            </td>
            <td>
              <label class="form-check-label">Có</label>
              <input
                class="form-check-input"
                type="radio"
                name="screens[<?php echo $k ?>]"
                value="1"
                <?php echo $screenTest[$k]==1 ? 'checked':'' ?>
                disabled
              />
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      <?php endif; ?>

          <h4 style="margin:20px 0">Chỉ định vaccine</h4>
          <div class="col-md-12">
            <label for="validationDefault01">Vaccine:</label>
            <input
              type="text"
              class="form-control"
              id="SpecificCurrentAddressInp"
              name="address"
              value="<?php echo $vaccine ?>"
              readonly
              required
            />
          </div>
          </hr>
          <h4 style="margin:20px 0">Kết quả theo dõi sau tiêm</h4>
          <div class="col-md-12" style="margin-bottom: 30px">
            <label for="validationDefault01">Triệu chứng / Dị ứng (nếu có):</label>
            <textarea class="form-control" name="symptom" rows="5" readonly style="resize:none"></textarea>
          </div>
</div>