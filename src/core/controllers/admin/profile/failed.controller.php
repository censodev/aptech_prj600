<?php
(new Profile())->update($_GET['id'], [
    'status' => ProfileStatus::FAILED,
    'symptom' => $_POST['symptom'],
]);

Helper::redirect('admin/home?status=' . ProfileStatus::INJECTED);
