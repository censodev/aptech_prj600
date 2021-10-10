<!-- <?php echo "registered injections"?> -->

<link rel="stylesheet" href="assets/css/registered-injections.css" />
<div class="wrap">
    <div class="create-new-injection">
        <div class="container center">
            <a
                href="<?php echo Helper::url('injection-registration') ?>"
                type="button"
                class="btn btn-primary"
                style="
          background-color: #18bcc7;
          border: none;
          font-size: 18px;
          padding: 10px 20px;
        "
                id="createNewInjection"
            >
                + Đăng ký mũi tiêm mới
            </a>
            <a href="<?php echo Helper::url('logout') ?>">Đăng xuất</a>
        </div>
    </div>
    <div class="container card-layout">
        <div class="card" style="width: 404px; border-radius: 10px; margin: 10px">
            <div class="card-body">
                <h3 class="card-title" id="username">Bùi Việt Phương</h3>
                <span
                    class="badge"
                    style="
            border: 2px solid #18bcc7;
            padding: 10px 20px;
            color: #18bcc7;
            border-radius: 10px;
          "
                    id="status"
                >Đã hoàn thành</span
                >
                <!-- ! Tùy từng trạng thái mà gắn tag vào -->
                <!-- <span
                      class="badge"
                      style="
                        border: 2px solid #E60000;
                        padding: 10px 20px;
                        color: #E60000;
                        border-radius: 10px;
                      "
                      id="status"
                      >Chưa hoàn thành</span
                    >
                    <span
                      class="badge"
                      style="
                        border: 2px solid #FF7800;
                        padding: 10px 20px;
                        color: #FF7800;
                        border-radius: 10px;
                      "
                      id="status"
                      >Đã hủy lịch</span
                    > -->
                <div class="person-infor">
                    <div class="title">
                        <p>Ngày sinh:</p>
                    </div>
                    <div class="infor">
                        <p id="dateOfBirth">20/09/2000</p>
                    </div>
                </div>
                <div class="person-infor">
                    <div class="title">
                        <p>Tiêm vaccine:</p>
                    </div>
                    <div class="infor">
                        <p id="typeOfVaccine">
                            COVID-19 Vaccine Comirnaty (Pfizer) - 0 VND
                        </p>
                    </div>
                </div>
                <div class="person-infor">
                    <div class="title">
                        <p>Điểm tiêm:</p>
                    </div>
                    <div class="infor">
                        <p id="injectionAddress">
                            Điểm lưu động bệnh viện Xanh Phôn, CDC Hà Nội, CDC Hà Nội, Thành
                            phố Hà Nội
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="card-body"
                style="
          display: flex;
          flex-direction: row;
          justify-content: space-around;
          align-items: center;
        "
            >
                <a
                    href="#"
                    class="btn btn-primary"
                    id="createNextInjectionBtn"
                    style="
            border-radius: 10px;
            background-color: #18bcc7;
            border: none;
            padding: 10px;
          "
                >Đăng ký mũi tiêm tiếp theo</a
                >
                <a
                    href="#"
                    class="btn btn-secondary"
                    id="showDetailBtn"
                    style="border-radius: 10px; border: none; padding: 10px 15px"
                >Thông tin chi tiết</a
                >
                <!--! Trong trường hợp yêu cầu đăng ký lại -->
                <!-- <a
                      href="#"
                      class="btn btn-primary"
                      id="registrationBtn"
                      style="border-radius: 10px; border: none; padding: 10px 15px"
                    >
                      + Đăng ký lại</a
                    > -->
            </div>
        </div>
    </div>
</div>
