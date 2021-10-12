<?php
(new Profile())->update($_GET['id'], [
    'status' => ProfileStatus::COMPLETED,
]);

Helper::redirect('admin/home?status=' . ProfileStatus::INJECTED);
