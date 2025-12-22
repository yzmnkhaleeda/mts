<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Customer';

$currentUserId = 2;

$customer_id = $_GET['customer_id'] ?? null;

if (! $customer_id) {
    abort();
}

$customer = $db->query(
    'SELECT c.*, u.full_name 
     FROM customer c 
     LEFT JOIN users u ON c.user_id = u.user_id 
     WHERE c.customer_id = :id',
    ['id' => $customer_id]
)->findOrFail();

view('customers/show.view.php', [
    'heading' => $heading,
    'customer' => $customer,
    'currentUserId' => $currentUserId,
]);
