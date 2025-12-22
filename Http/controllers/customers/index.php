<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Customer List';

$customers = $db->query('SELECT c.*, u.full_name 
                         FROM customer c 
                         LEFT JOIN users u ON c.user_id = u.user_id')->fetchAll();

view('customers/index.view.php', [
    'heading' => $heading,
    'customers' => $customers,
]);
