<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if ($form->validate($login, $password)) {

    if ((new Authenticator)->attempt($login, $password)) {

        redirect('/dashboard');
    }

        $form->errors('login', 'Invalid login credentials.');
    
}
    return view('sessions/create.view.php', [
        'errors' => $form->errors()
    ]);
