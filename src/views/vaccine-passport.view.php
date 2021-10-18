<link rel="stylesheet" href="<?php echo Helper::assets("css/vaccine-passport.css") ?>"
/>
<div
      class="container"
      style="
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 20px 0;
      "
    >
    <?php if($profile == NULL): ?><h3>Không tồn tại dữ liệu</h3>
    <?php else : ?>
        <div class="infor" style="width: 72%; height: fit-content;margin-top: 50px;">
          <div class="container">
            <div class="row">
              <div class="col"><p>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p></div>
            </div>
            <div class="row">
              <div class="col"><p>Độc lập - Tự do - Hạnh phúc</p></div>
            </div>
            <div class="row">
              <div class="col">
                <p class="title">CHỨNG NHẬN TIÊM CHỦNG COVID-19</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 infor">
                <label>Họ và tên:</label>
                <span id="name"><?php echo $profile['full_name']?></span>
              </div>
              <div class="col-md-3 infor">
                <label>Ngày sinh:</label>
                <span id="birthday"><?php echo $profile['birthday']?></span>
              </div>
              <div class="col-md-3 infor">
                <label>CMND/CCCD/HC:</label>
                <span id="identification"><?php echo $profile['identity_card']?></span>
              </div>
              <div class="col-md-3 infor">
                <label>Số điện thoại:</label>
                <span id="phonenumber"><?php echo $profile['phone']?></span>
              </div>
              <div class="col-12 infor">
                <label>Địa chỉ:</label>
                <span id="address"
                  ><?php echo $ward.", ".$district .", ".$province.". "?></span
                >
              </div>
              <div class="col-12 infor">
                <label>Kết luận:</label>
                <span id="address"><?php echo $profile['status']==4 ?  'Đã được tiêm vaccine phòng bệnh COVID-19':'Chưa được tiêm vaccine' ?></span>
              </div>
            </div>
              <div class="mw-100 overflow-auto">
                  <table class="table table-bordered mw-1">
                      <thead>
                      <tr>
                          <td>Mũi số</td>
                          <td>Thời gian tiêm</td>
                          <td>Tên vaccine</td>
                          <td>Điểm tiêm</td>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($profiles as $u): ?>
                      <tr>
                          <td><?php static  $i =1; echo $i++?></td>
                          <td><?php echo $u['injection_date']?></td>
                          <td><?php echo Vaccine::findNameOfVaccineById($u['vaccine_id']) ?></td>
                          <td> <?php echo InjectionSite::getFullyInjectionSiteByProfile($u) ?></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
    <?php endif ; ?>
  </div>