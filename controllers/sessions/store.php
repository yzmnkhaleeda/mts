<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

$errors = [];

if (! Validator::string($login)) {
    $errors['login'] = 'Email/username is required.';
}

if (! Validator::string($password, 3)) {
    $errors['password'] = 'Password is required.';
}

if (! empty($errors)) {
    return view('sessions/create.view.php', ['errors' => $errors]);
}

$db = App::resolve(Database::class);

$auth = new Authenticator();

if (! $auth->attempt(['login' => $login, 'password' => $password], $db)) {
    return view('sessions/create.view.php', [
        'errors' => ['login' => 'These credentials do not match our records.']
    ]);
}

header('Location: /dashboard');
exit;
