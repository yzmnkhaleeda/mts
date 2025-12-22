<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = $_POST['user_id'] ?? null;

if (! $user_id) {
    abort();
}

$user = $db->query(
    'SELECT * FROM users WHERE user_id = :id',
    ['id' => $user_id]
)->findOrFail();

$db->query(
    'DELETE FROM users WHERE user_id = :id',
    ['id' => $user_id]
);

header('Location: /admin/users');
exit();
