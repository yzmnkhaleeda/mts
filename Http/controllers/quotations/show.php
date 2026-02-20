<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Quotation';

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

view('quotations/show.view.php', [
    'heading' => $heading,
    'quotation' => $quotation,
]);
