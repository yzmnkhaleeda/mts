 <?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Edit Supplier';

$currentUserId = 2;

$supplier_id = $_GET['supplier_id'] ?? null;

if (! $supplier_id) {
    abort();
}

$supplier = $db->query(
    'SELECT * FROM supplier WHERE supplier_id = :id',
    ['id' => $supplier_id]
)->findOrFail();

authorize($supplier['user_id'] === $currentUserId);

view('suppliers/edit.view.php', [
    'heading' => $heading,
    'supplier' => $supplier,
]);
