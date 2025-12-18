<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address";
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = "Please provide a password of at least eight characters.";
}

if (!empty($errors)) {
    return view('users/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->find();

if ($user) {
    $errors['email'] = 'That email is already registered.';
    return view('users/create.view.php', [
        'errors' => $errors,
    ]);
}

$db->query(
    'insert into users (email, password_hash) values (:email, :password_hash)',
    [
        'email' => $email,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
    ]
);

// Admin flow: do NOT login as the new user
// login($user);

header('Location: /users'); // or /dashboard, or whatever your users list page is
exit();
