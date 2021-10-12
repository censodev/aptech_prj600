<?php
$vaccine = new Vaccine();
try {
    $vaccine->beginTransaction();
    $selected_vaccine = $vaccine->findById($_POST['vaccine_id']);
    $vaccine->update($_POST['vaccine_id'], ['consumed_doses' => $selected_vaccine['consumed_doses'] + 1]);

    (new Profile())->update($_GET['id'], [
        'status' => ProfileStatus::INJECTED,
        'vaccine_id' => $_POST['vaccine_id'],
    ]);
    $vaccine->commit();
} catch (Exception $e) {
    $vaccine->rollback();
}

Helper::redirect('admin/home?status=' . ProfileStatus::SCREENED);