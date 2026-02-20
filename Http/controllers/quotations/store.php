<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];
$currentUserId = $_SESSION['user']['id'];

if (! Validator::string($_POST['title'] ?? '', 1, 255)) {
    $errors['title'] = 'Title is required.';
}

if (! Validator::string($_POST['notes'] ?? '', 0)) {
    $errors['notes'] = 'Notes must be a valid string.';
}

if (! empty($errors)) {
    return view('quotations/create.view.php', [
        'errors' => $errors,
    ]);
}

$db->query(
    'INSERT INTO quotation (user_id, title, notes) VALUES (:user_id, :title, :notes)',
    [
        'user_id' => $currentUserId,
        'title' => $_POST['title'],
        'notes' => $_POST['notes'],
    ]
);

redirect('/quotations');
