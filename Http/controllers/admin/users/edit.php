<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Edit Staff';

$user_id = $_GET['user_id'] ?? null;

if (! $user_id) {
    abort();
}

$user = $db->query(
    'SELECT * FROM users WHERE user_id = :id',
    ['id' => $user_id]
)->findOrFail();

view('admin/users/edit.view.php', [
    'heading' => $heading,
    'user' => $user,
]);
