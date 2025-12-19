<?php

use Core\Validator;
use Core\Database;
use Core\App;

$heading = 'Create Staff Account';

$db = App::resolve(Database::class);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['full_name'] ?? '', 2, 100)) {
        $errors['full_name'] = 'Full name of no more than 100 characters is required';
    }

    if (! Validator::email($_POST['email'] ?? '')) {
        $errors['email'] = 'Valid email address is required';
    }

    if (! Validator::string($_POST['username'] ?? '', 2, 50)) {
        $errors['username'] = 'Username of no more than 50 characters is required';
    }

    if (! Validator::string($_POST['password'] ?? '', 6, 255)) {
        $errors['password'] = 'Password of at least 6 characters is required';
    }

    if (! empty($errors)) {
        return view('admin/users/create.view.php', [
            'heading' => 'Create Staff Account',
            'errors' => $errors,
        ]);
    }

    $db->query(
        'INSERT INTO users (full_name, phone_number, email, username, password_hash, department, position, role)
         VALUES (:full_name, :phone_number, :email, :username, :password_hash, :department, :position, :role)',
        [
            'full_name'      => $_POST['full_name'],
            'phone_number'   => $_POST['phone_number'] ?? null,
            'email'          => $_POST['email'],
            'username'       => $_POST['username'],
            'password_hash'  => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'department'     => $_POST['department'] ?? null,
            'position'       => $_POST['position'] ?? null,
            'role'           => 'staff',
        ]
    );

    header('Location: /dashboard');
    exit();
}

view('admin/users/create.view.php', [
    'heading' => 'Create Staff Account',
    'errors' => $errors,
]);
