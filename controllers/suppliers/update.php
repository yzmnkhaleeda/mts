<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 2;

$supplier = $db->query(
    'SELECT * FROM supplier WHERE supplier_id = :id',
    ['id' => $_POST['supplier_id']]
)->findOrFail();

authorize($supplier['user_id'] === $currentUserId);

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
if (! Validator::string($_POST['brands_supplied'] ?? '', 1, 255)) {
    $errors['brands_supplied'] = 'Brands supplied of no more than 255 characters is required';
}
if (! Validator::string($_POST['items_supplied'] ?? '', 1, 255)) {
    $errors['items_supplied'] = 'Items supplied of no more than 255 characters is required';
}

if (!empty($errors)) {
    return view('suppliers/edit.view.php', [
        'heading' => 'Edit Supplier',
        'errors' => $errors,
        'supplier' => $supplier,
    ]);
}

// Update
$db->query(
    'UPDATE supplier SET 
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
        brands_supplied = :brands_supplied,
        items_supplied = :items_supplied
     WHERE supplier_id = :supplier_id',
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
        'brands_supplied' => $_POST['brands_supplied'],
        'items_supplied' => $_POST['items_supplied'],
        'supplier_id' => $_POST['supplier_id'],
    ]
);

header('Location: /supplier?supplier_id=' . $_POST['supplier_id']);
die();
