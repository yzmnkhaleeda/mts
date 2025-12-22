<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

    $form =LoginForm::validate($attributes = [
        'login' => $_POST['login'],
        'password' => $_POST['password']
    ]);

$signedIn = (new Authenticator())->attempt(
    $attributes['login'], $attributes['password'], 3
);

if (! $signedIn) {
  $form->error(
    'login', 'Invalid login credentials.'
    )->throw();  
}



redirect('/dashboard');