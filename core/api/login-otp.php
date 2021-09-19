<?php
if (isset($_GET['phone'])) {
    $_SESSION['phone'] = $_GET['phone'];
    echo json_encode(['msg' => 'Đăng nhập thành công']);
}
