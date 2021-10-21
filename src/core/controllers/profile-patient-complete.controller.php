<?php
if ($_POST['action'] == 1) {
    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::FAILED,
        'symptom' => $_POST['symptom'],
    ]);
}
Helper::redirect('profile-patient?id=' . $_GET['id']);
