<?php

$errors = [];

$heading = 'Register New User';

view('users/create.view.php', [
    'heading' => $heading,
    'errors' => $errors,
]);

