<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];

$quotation_id = $_POST['quotation_id'] ?? null;

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

$db->query(
    'DELETE FROM quotation WHERE quotation_id = :id AND user_id = :user_id',
    ['id' => $quotation_id, 'user_id' => $currentUserId]
);

redirect('/quotations');
