<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Supplier';

$currentUserId = 2;

$supplier_id = $_GET['supplier_id'] ?? null;

if (! $supplier_id) {
    abort();
}

$supplier = $db->query(
    'SELECT s.*, u.full_name 
     FROM supplier s 
     LEFT JOIN users u ON s.user_id = u.user_id 
     WHERE s.supplier_id = :id',
    ['id' => $supplier_id]
)->findOrFail();

view('suppliers/show.view.php', [
    'heading' => $heading,
    'supplier' => $supplier,
    'currentUserId' => $currentUserId,
]);
