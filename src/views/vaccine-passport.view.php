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
            <div class="col-4 infor">
              <label>Họ và tên:</label>
              <span id="name">Nguyễn Hải Đăng</span>
            </div>
            <div class="col-4 infor">
              <label>Ngày sinh:</label>
              <span id="birthday">03/02/2000</span>
            </div>
            <div class="col-4 infor">
              <label>Số CMND/CCCD/HC:</label>
              <span id="identification">0987654321</span>
            </div>
            <div class="col-4 infor">
              <label>Số điện thoại:</label>
              <span id="phonenumber">0987654321</span>
            </div>
            <div class="col-4 infor">
              <label>Số BHYT:</label>
              <span id="bhyt">0987654321</span>
            </div>
            <div class="col-12 infor">
              <label>Địa chỉ:</label>
              <span id="address"
                >Xã Đồng Tháp - huyện Đan Phượng - Thành phố Hà Nội</span
              >
            </div>
            <div class="col-12 infor">
              <label>Kết luận:</label>
              <span id="address">Đã được tiêm vaccine phòng bệnh COVID-19</span>
            </div>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <td>Mũi số</td>
                <td>Thời gian tiêm</td>
                <td>Tên vaccine</td>
                <td>Điểm tiêm</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>12/09/2021 - 19:10</td>
                <td>COVID-19 - Vaccine AstraZeneca</td>
                <td>Bệnh viện đa khoa Đan Phượng</td>
              </tr>
              <tr>
                <td>2</td>
                <td>23/10/2021 - 19:10</td>
                <td>COVID-19 - Vaccine AstraZeneca</td>
                <td>Bệnh viện đa khoa Đan Phượng</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="passport" style="width: 28%; height: fit-content">
        <div
          class="card"
          style="
            width: 100%;
            height: 750px;
            background-color: #18bcc7;
            border-radius: 10px;
            box-shadow: 0px 0px 13px -4px #000000;
          "
        >
          <div class="container">
            <div class="row">
              <div class="col" style="text-align: center; padding: 10px 0">
                <img
                  src="<?php echo Helper::assets("img/9d8ed5_651b6cb038ff4917bcdbe0c58ca2c241_mv2.png")?>"
                  alt=""
                  srcset=""
                  style="width: 40%"
                />
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p id="status" class="status">ĐÃ TIÊM 2 MŨI VACCINE</p>
              </div>
            </div>
            <div class="row">
              <div class="col" style="display: flex; justify-content: center">
                <div id="qrCode" class="qrCode">
                    <!-- insert qr code at here -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col" style="display: flex; justify-content: center">
                <div id="inforPatient" class="inforPassport">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 inforPassportdDetail">
                        <label>Họ và tên:</label>
                        <span id="name">Nguyễn Hải Đăng</span>
                      </div>
                      <div class="col-12 inforPassportdDetail">
                        <label>Ngày sinh:</label>
                        <span id="birthday">03/02/2000</span>
                      </div>
                      <div class="col-12 inforPassportdDetail">
                        <label>Số CMND/CCCD/HC:</label>
                        <span id="identification">0987654321</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>