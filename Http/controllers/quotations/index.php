<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Quotations';

$currentUserId = $_SESSION['user']['id'];

$quotations = $db->query(
    'SELECT * FROM quotation'
)->fetchAll();

view('quotations/index.view.php', [
    'heading' => $heading,
    'quotations' => $quotations,
]);
