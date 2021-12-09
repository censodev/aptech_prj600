<?php
if ($_POST['action'] == 1) {
    if (isset($_POST['have_appointment'])) {
        $profile = (new Profile())->findById($_GET['id']);
        $vaccine = (new Vaccine())->findById($profile['vaccine_id']);
        $days = $vaccine['appointment_days'];
        $appointment_date = is_null($days)
            ? null
            : date('Y-m-d', strtotime("+$days days"));
    } else {
        $appointment_date = null;
    }
    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::COMPLETED,
        'appointment_date' => $appointment_date,
    ]);
} else {
    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::FAILED,
        'symptom' => $_POST['symptom'],
    ]);
}


Helper::redirect('admin/home?status=' . ProfileStatus::INJECTED);
