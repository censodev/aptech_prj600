<!-- <?php echo "registered injections" ?> -->

<link rel="stylesheet" href="<?php echo Helper::assets("css/registered-injections.css") ?>"
/>
<div class="wrap">
    <div class="create-new-injection">
        <div class="container center">
            <div class="row">
                <div class="col">
                    <a href="<?php echo Helper::url('injection-registration') ?>"
                       type="button"
                       class="btn btn-primary border-0 px-3 py-2"
                       style="background-color: #18bcc7;font-size: 18px;border-radius: 10px;"
                       id="createNewInjection">+ Đăng ký mũi tiêm mới</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container card-layout py-3">
        <div class="card" style="width: 404px; border-radius: 10px; margin: 10px">
            <div class="card-body">
                <h3 class="card-title" id="username">Bùi Việt Phương</h3>
                <span class="badge px-3 py-2"
                      style="border: 2px solid #18bcc7;color: #18bcc7;border-radius: 10px;"
                      id="status">Đã hoàn thành</span>
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
            <div class="card-body d-flex justify-content-around align-items-center">
                <a href="#"
                   class="btn btn-primary border-0 px-3 py-2"
                   style="border-radius: 10px;background-color: #18bcc7;"
                   id="createNextInjectionBtn">Thông tin chi tiết</a>
            </div>
        </div>
    </div>
</div>
