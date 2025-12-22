<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 2;

$customer = $db->query(
    'SELECT * FROM customer WHERE customer_id = :id',
    ['id' => $_POST['customer_id']]
)->findOrFail();

authorize($customer['user_id'] === $currentUserId);

$errors = [];

// Validation
if (! Validator::string($_POST['company_name'] ?? '', 1, 150)) {
    $errors['company_name'] = 'Company name of no more than 150 characters is required';
}
if (! Validator::string($_POST['industry_type'] ?? '', 1, 100)) {
    $errors['industry_type'] = 'Industry type of no more than 100 characters is required';
}
if (! Validator::string($_POST['company_address'] ?? '', 1, 255)) {
    $errors['company_address'] = 'Company address of no more than 255 characters is required';
}
if (! Validator::string($_POST['company_city'] ?? '', 1, 100)) {
    $errors['company_city'] = 'Company city of no more than 100 characters is required';
}
if (! Validator::string($_POST['company_state'] ?? '', 1, 100)) {
    $errors['company_state'] = 'Company state of no more than 100 characters is required';
}
if (! Validator::string($_POST['company_postcode'] ?? '', 1, 10)) {
    $errors['company_postcode'] = 'Company postcode of no more than 10 characters is required';
}
if (! Validator::string($_POST['company_phone'] ?? '', 1, 20)) {
    $errors['company_phone'] = 'Company phone of no more than 20 characters is required';
}
if (! Validator::email($_POST['company_email'] ?? '')) {
    $errors['company_email'] = 'Company email must be a valid email address';
}
if (! Validator::string($_POST['pic_name'] ?? '', 1, 100)) {
    $errors['pic_name'] = 'PIC name of no more than 100 characters is required';
}
if (! Validator::string($_POST['pic_phone'] ?? '', 1, 20)) {
    $errors['pic_phone'] = 'PIC phone of no more than 20 characters is required';
}
if (! Validator::email($_POST['pic_email'] ?? '')) {
    $errors['pic_email'] = 'PIC email must be a valid email address';
}
if (! Validator::string($_POST['pic_position'] ?? '', 1, 100)) {
    $errors['pic_position'] = 'PIC position of no more than 100 characters is required';
}
if (! Validator::string($_POST['category'] ?? '', 1, 50)) {
    $errors['category'] = 'Category is required';
}
if (! Validator::string($_POST['category_details'] ?? '', 1, 500)) {
    $errors['category_details'] = 'Category details of no more than 500 characters is required';
}

if (!empty($errors)) {
    return view('customers/edit.view.php', [
        'heading' => 'Edit Customer',
        'errors' => $errors,
        'customer' => $customer,
    ]);
}

// Update
$db->query(
    'UPDATE customer SET 
        company_name = :company_name,
        industry_type = :industry_type,
        company_address = :company_address,
        company_city = :company_city,
        company_state = :company_state,
        company_postcode = :company_postcode,
        company_phone = :company_phone,
        company_email = :company_email,
        pic_name = :pic_name,
        pic_phone = :pic_phone,
        pic_email = :pic_email,
        pic_position = :pic_position,
        category = :category,
        category_details = :category_details
     WHERE customer_id = :customer_id',
    [
        'company_name' => $_POST['company_name'],
        'industry_type' => $_POST['industry_type'],
        'company_address' => $_POST['company_address'],
        'company_city' => $_POST['company_city'],
        'company_state' => $_POST['company_state'],
        'company_postcode' => $_POST['company_postcode'],
        'company_phone' => $_POST['company_phone'],
        'company_email' => $_POST['company_email'],
        'pic_name' => $_POST['pic_name'],
        'pic_phone' => $_POST['pic_phone'],
        'pic_email' => $_POST['pic_email'],
        'pic_position' => $_POST['pic_position'],
        'category' => $_POST['category'],
        'category_details' => $_POST['category_details'],
        'customer_id' => $_POST['customer_id'],
    ]
);

header('Location: /customer?customer_id=' . $_POST['customer_id']);
die();
