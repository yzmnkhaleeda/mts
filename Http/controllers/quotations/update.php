<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];
$currentUserId = $_SESSION['user']['id'];

$quotation_id = $_GET['quotation_id'] ?? null;

if (! $quotation_id) {
    abort();
}

$quotation = $db->query(
    'SELECT * FROM quotation WHERE quotation_id = :id AND user_id = :user_id',
    ['id' => $quotation_id, 'user_id' => $currentUserId]
)->find();

if (! $quotation) {
    abort();
}

if (! Validator::string($_POST['title'] ?? '', 1, 255)) {
    $errors['title'] = 'Title is required.';
}

if (! Validator::string($_POST['notes'] ?? '', 0)) {
    $errors['notes'] = 'Notes must be a valid string.';
}

if (! empty($errors)) {
    return view('quotations/edit.view.php', [
        'errors' => $errors,
        'quotation' => $quotation,
    ]);
}

$db->query(
    'UPDATE quotation SET title = :title, notes = :notes WHERE quotation_id = :id AND user_id = :user_id',
    [
        'title' => $_POST['title'],
        'notes' => $_POST['notes'],
        'id' => $quotation_id,
        'user_id' => $currentUserId,
    ]
);

redirect('/quotation?quotation_id=' . $quotation_id);
