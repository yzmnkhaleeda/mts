<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if (! $form->validate($login, $password)) {
    return view('sessions/create.view.php', [
        'errors' => $form->errors()
    ]);
}

$auth = new Authenticator();

if (! $auth->attempt(['login' => $login, 'password' => $password], $db)) {
    return view('sessions/create.view.php', [
        'errors' => ['login' => 'These credentials do not match our records.']
    ]);
}

header('Location: /dashboard');
exit;
