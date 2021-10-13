<!-- <?php echo "injection registration" ?> -->

<link rel="stylesheet" href="<?php echo Helper::assets("css/injection-registration.css") ?>"
/>
<link rel="stylesheet" href="<?php echo Helper::assets('css/admin.css') ?>" />
<div class="container">
  <div class="title">
    <h4>Đăng ký mũi tiêm mới</h4>
  </div>
  <form method="post" class="row g-3">
    <label class="form-check-label personal-infor" for="invalidCheck2">
      Thông tin cá nhân
    </label>
    <div class="col-md-4">
      <label for="validationDefault01">Họ và tên</label>
      <input
        type="text"
        class="form-control"
        id="nameInp"
        name="full_name"
        value=""
        placeholder="Ví dụ: Nguyễn Hải Anh ..."
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
        value=""
        placeholder="Điền số CMT hoặc CCCD"
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
            checked
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
          />
          <label class="form-check-label" for="inlineRadio2">Khác</label>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationDefault04">Quốc gia</label>
      <select class="form-select" name="country_id" required>
          <?php foreach ($countries as $v): ?>
              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
          <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault03">Dân tộc</label>
      <select class="form-select" name="nation_id" required>
          <?php foreach ($nations as $v): ?>
              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
          <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05">Ngày sinh</label>
      <input
        type="date"
        class="form-control"
        id="birthdaytime"
        name="birthday"
        required
      />
    </div>
    <div class="col-md-3">
      <label for="validationDefault02">Số điện thoại</label>
      <input
        type="text"
        class="form-control"
        id="phoneNumberInp"
        name="phone"
        value=""
        placeholder="Ví dụ: 098754321"
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
        value=""
        placeholder="Nhập thông tin nghề nghiệp"
      />
    </div>
    <div class="col-md-6">
      <label for="validationDefault02">Đơn vị công tác</label>
      <input
        type="text"
        class="form-control"
        id="workplaceInp"
        name="workspace"
        value=""
        placeholder="Đơn vị công tác"
      />
    </div>
    <div class="col-md-3">
      <label for="validationDefault04">Tỉnh</label>
      <select class="form-select" name="province_id" required>
          <option></option>
          <?php foreach ($provinces as $v): ?>
              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
          <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault03">Quận, huyện</label>
      <select class="form-select" name="district_id" required></select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault03">Xã, phường</label>
      <select class="form-select" name="ward_id" required></select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault01">Địa chỉ cụ thể</label>
      <input
        type="text"
        class="form-control"
        id="SpecificCurrentAddressInp"
        name="address"
        value=""
        placeholder="Địa chỉ hiện tại"
        required
      />
    </div>
    <label
      class="form-check-label personal-infor"
      style="margin-top: 30px"
      for="invalidCheck2"
    >
      Đăng kí tiêm
    </label>
    <div class="col-md-3">
      <label for="validationDefault04">Tỉnh</label>
      <select class="form-select" id="injection_province_id" required>
          <option></option>
          <?php foreach ($provinces as $v): ?>
              <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
          <?php endforeach; ?>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault03">Quận, huyện</label>
      <select class="form-select" id="injection_district_id" required></select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault03">Chọn điểm tiêm</label>
      <select class="form-select" name="injection_site_id" required></select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05">Ngày tiêm</label>
      <input
        type="date"
        class="form-control"
        id="injectionDate"
        name="injection_date"
        required
      />
    </div>
    <div class="btn-group">
      <div class="btn-submit accept">
          <button
                  class="btn btn-primary"
                  style="background-color: #18bcc7; border: none"
                  type="submit"
                  id="acceptBtn"
          >
              Đăng ký
          </button>
      </div>
      <div class="btn-submit cancel">
          <a class="btn btn-secondary" href="<?php echo Helper::url('home') ?>">
              Hủy bỏ
          </a>
      </div>
    </div>
  </form>
</div>

<script>
    document.querySelector('select[name=province_id]').addEventListener('change', e => {
        fetch(`<?php echo Helper::url('api/master/district') ?>?province_id=${e.target.value}`)
            .then(res => res.json())
            .then(data => {
                document.querySelector('select[name=district_id]').innerHTML = data.reduce((acc, cur) => {
                    return acc + `<option value="${cur.id}">${cur.name}</option>`
                }, '<option></option>')
                document.querySelector('select[name=ward_id]').innerHTML = ''
            })
    })
    document.querySelector('select[name=district_id]').addEventListener('change', e => {
        fetch(`<?php echo Helper::url('api/master/ward') ?>?district_id=${e.target.value}`)
            .then(res => res.json())
            .then(data => {
                document.querySelector('select[name=ward_id]').innerHTML = data.reduce((acc, cur) => {
                    return acc + `<option value="${cur.id}">${cur.name}</option>`
                }, '<option></option>')
            })
    })

    document.querySelector('select[id=injection_province_id]').addEventListener('change', e => {
        fetch(`<?php echo Helper::url('api/master/district') ?>?province_id=${e.target.value}`)
            .then(res => res.json())
            .then(data => {
                document.querySelector('select[id=injection_district_id]').innerHTML = data.reduce((acc, cur) => {
                    return acc + `<option value="${cur.id}">${cur.name}</option>`
                }, '<option></option>')
                document.querySelector('select[name=injection_site_id]').innerHTML = ''
            })
    })
    document.querySelector('select[id=injection_district_id]').addEventListener('change', e => {
        fetch(`<?php echo Helper::url('api/injection-site') ?>?district_id=${e.target.value}`)
            .then(res => res.json())
            .then(data => {
                document.querySelector('select[name=injection_site_id]').innerHTML = data.reduce((acc, cur) => {
                    return acc + `<option value="${cur.id}">${cur.name}</option>`
                }, '<option></option>')
            })
    })
</script>
