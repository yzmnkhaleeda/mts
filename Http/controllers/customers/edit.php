 <?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Edit Customer';

$currentUserId = $_SESSION['user']['user_id'];

$customer_id = $_GET['customer_id'] ?? null;

if (! $customer_id) {
    abort();
}

$customer = $db->query(
    'SELECT * FROM customer WHERE customer_id = :id',
    ['id' => $customer_id]
)->findOrFail();

authorize($customer['user_id'] === $currentUserId);

view('customers/edit.view.php', [
    'heading' => $heading,
    'customer' => $customer,
]);
