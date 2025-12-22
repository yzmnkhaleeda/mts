<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$customer_id = $_POST['customer_id'] ?? null;

if (! $customer_id) {
    abort();
}

$customer = $db->query(
    'SELECT * FROM customer WHERE customer_id = :id',
    ['id' => $customer_id]
)->findOrFail();

authorize($customer['user_id'] === $currentUserId);

$db->query(
    'DELETE FROM customer WHERE customer_id = :id',
    ['id' => $customer_id]
);

header('Location: /customers');
exit();
