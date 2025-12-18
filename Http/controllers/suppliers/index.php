<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Supplier List';

$suppliers = $db->query('select * from supplier')->fetchAll();

view('suppliers/index.view.php', [
    'heading' => $heading,
    'suppliers' => $suppliers,
]);
