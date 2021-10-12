<?php
Helper::authGuard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMS</title>
    <link rel="shortcut icon" href="<?php echo Helper::assets('img/icons/icon-48x48.png') ?>" />
    <link rel="stylesheet" href="<?php echo Helper::assets("css/layout.css") ?>"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap">
</head>
<body>
    <?php if (Helper::isAuthorized()): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="logo">
            </div>
            <div class="user-infor" style="position:relative;cursor:pointer">
                <div class="information" onclick="showLogOut()">
                    <div class="phoneNumber-infor">
                        <p id="phoneNumber" class="phoneNumber" style="margin:8px 0">0987654321</p>
                    </div>
                    <div class="img-user">
                        <img src="<?php echo Helper::assets('img/default_avatar.svg') ?>" alt="" srcset="">
                    </div>
                </div>
                <div class="log-out" id="logout" style="
                    position:absolute;
                    width:100%;
                    height:50px;
                    margin:9px;
                    background-color:#18BCC7;
                    display:none;
                    border-radius:10px;
                    align-items:center;
                    justify-content:center;
                    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.51);
                    transition:0.5s">
                    <a style="color:white; text-decoration:none; font-weight:600;font-size:18px" href="<?php echo Helper::url('logout') ?>">Đăng xuất <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <?php echo $layout_content ?>

    <?php else: ?>
        <?php echo $layout_content ?>
    <?php endif; ?>
    <script>
        function showLogOut(){
            let status=document.getElementById('logout');
            console.log(status);
            if(status.style.display=="none"){
                status.style.display="flex";
            }else{
                status.style.display="none";
            }
        }
    </script>
</body>
</html>
