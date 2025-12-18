<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$supplier_id = $_POST['supplier_id'] ?? null;

if (! $supplier_id) {
    abort();
}

$supplier = $db->query(
    'SELECT * FROM supplier WHERE supplier_id = :id',
    ['id' => $supplier_id]
)->findOrFail();

authorize($supplier['user_id'] === $currentUserId);

$db->query(
    'DELETE FROM supplier WHERE supplier_id = :id',
    ['id' => $supplier_id]
);

header('Location: /suppliers');
exit();
