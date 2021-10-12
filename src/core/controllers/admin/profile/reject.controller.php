<?php
(new Profile())->update($_GET['id'], ['status' => ProfileStatus::REJECTED]);
Helper::redirect('admin/home?status=' . ProfileStatus::CREATED);