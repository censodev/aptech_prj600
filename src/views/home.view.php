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
    <?php foreach ($profiles as $u): ?>
        <div class="container card-layout py-3">
            <div class="card" style="width: 404px; border-radius: 10px; margin: 10px">
                <div class="card-body">
                    <h3 class="card-title" id="username"><?php echo $u['full_name'] ?></h3>
                    <span class="badge px-3 py-2"
                        style="border: 2px solid <?php echo Profile::getColorbyStatus($u['status']) ?>;color:<?php echo Profile::getColorbyStatus($u['status']) ?>;border-radius: 10px;"
                        id="status"><?php echo Profile::status($u['status'])  ?></span>
                    <div class="person-infor">
                        <div class="title">
                            <p>Ngày tiêm:</p>
                        </div>
                        <div class="infor">
                            <p id="dateOfBirth"><?php echo $u['injection_date'] ?></p>
                        </div>
                    </div>
                    <div class="person-infor">
                        <div class="title">
                            <p>Tiêm vaccine:</p>
                        </div>
                        <div class="infor">
                            <p id="typeOfVaccine">
                                <?php echo Vaccine::findNameOfVaccineById( $u['vaccine_id'])  ?>
                            </p>
                        </div>
                    </div>
                    <div class="person-infor">
                        <div class="title">
                            <p>Điểm tiêm:</p>
                        </div>
                        <div class="infor">
                            <p id="injectionAddress">
                                <?php 
                                $injectionSites = (new InjectionSite())->findWithJoinByID($u['injection_site_id']);
                                echo $injectionSites['name'].", ".$injectionSites['district_name'].", ".$injectionSites['province_name'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex justify-content-around align-items-center">
                    <a href=" <?php echo Helper::url('profile-patient ? id='.$u['id']) ?>"
                    class="btn btn-primary border-0 px-3 py-2"
                    style="border-radius: 10px;background-color: #18bcc7;"
                    id="createNextInjectionBtn">Thông tin chi tiết</a>
                </div>
            </div>
            <div class="gen-qr-code" style="width:100%;height:100px;display:flex;justify-content:center;align-item:center">
                <div class="qr-code" style="width:100px;height:100px;border:1px solid #323232;">
                <!-- generate QR code  -->
                </div>
            </div>
            <div class="card-body d-flex justify-content-around align-items-center">
                <a href="#"
                   class="btn btn-primary border-0 px-3 py-2"
                   style="border-radius: 10px;background-color: #18bcc7;"
                   id="createNextInjectionBtn">Thông tin chi tiết</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
