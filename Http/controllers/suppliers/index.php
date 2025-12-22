<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Supplier List';

$suppliers = $db->query('SELECT s.*, u.full_name 
                         FROM supplier s 
                         LEFT JOIN users u ON s.user_id = u.user_id')->fetchAll();

view('suppliers/index.view.php', [
    'heading' => $heading,
    'suppliers' => $suppliers,
]);
