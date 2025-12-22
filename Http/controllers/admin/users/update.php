<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$user = $db->query(
    'SELECT * FROM users WHERE user_id = :id',
    ['id' => $_POST['user_id']]
)->findOrFail();

$errors = [];

// Validation
if (! Validator::string($_POST['full_name'] ?? '', 2, 100)) {
    $errors['full_name'] = 'Full name of no more than 100 characters is required';
}
if (! Validator::email($_POST['email'] ?? '')) {
    $errors['email'] = 'Valid email address is required';
}
if (! Validator::string($_POST['username'] ?? '', 2, 15)) {
    $errors['username'] = 'Username of no more than 50 characters is required';
}

if (!empty($errors)) {
    return view('admin/users/edit.view.php', [
        'heading' => 'Edit Staff',
        'errors' => $errors,
        'user' => $user,
    ]);
}

// Update
$db->query(
    'UPDATE users SET 
        full_name = :full_name,
        phone_number = :phone_number,
        email = :email,
        username = :username,
        department = :department,
        position = :position,
        role = :role
     WHERE user_id = :user_id',
    [
        'full_name' => $_POST['full_name'],
        'phone_number' => $_POST['phone_number'] ?? null,
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'department' => $_POST['department'] ?? null,
        'position' => $_POST['position'] ?? null,
        'role' => $_POST['role'] ?? 'staff',
        'user_id' => $_POST['user_id'],
    ]
);

header('Location: /admin/users');
die();
