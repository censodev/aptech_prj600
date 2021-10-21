<?php
if ($_POST['action'] == 1) {
    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::COMPLETED,
        'appointment_date' => isset($_POST['have_appointment'])
            ? date('Y-m-d', strtotime('+1 months'))
            : null,
    ]);
} else {
    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::FAILED,
        'symptom' => $_POST['symptom'],
    ]);
}


Helper::redirect('admin/home?status=' . ProfileStatus::INJECTED);
