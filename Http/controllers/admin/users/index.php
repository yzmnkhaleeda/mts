<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Staff List';

$users = $db->query('SELECT * FROM users ORDER BY full_name')->fetchAll();

view('admin/users/index.view.php', [
    'heading' => $heading,
    'users' => $users,
]);
