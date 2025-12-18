<?php

use Core\App;
use Core\Database;
use Core\Validator;

$full_name   = $_POST['full_name'] ?? '';
$email       = $_POST['email'] ?? '';
$username    = $_POST['username'] ?? '';
$password    = $_POST['password'] ?? '';
$phone       = $_POST['phone_number'] ?? null;
$department  = $_POST['department'] ?? null;
$position    = $_POST['position'] ?? null;
$role        = 'staff'; // force staff creation; admin can be promoted manually

$errors = [];

if (! Validator::string($full_name, 2)) $errors['full_name'] = 'Name is required.';
if (! filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Valid email required.';
if (! Validator::string($username, 2)) $errors['username'] = 'Username required.';
if (! Validator::string($password, 6)) $errors['password'] = 'Min 6 chars password.';

if (! empty($errors)) {
    return view('admin/users/create.view.php', ['errors' => $errors]);
}

$db = App::resolve(Database::class);

$db->query(
    'INSERT INTO users (full_name, phone_number, email, username, password_hash, department, position, role)
     VALUES (:full_name, :phone_number, :email, :username, :password_hash, :department, :position, :role)',
    [
        'full_name'      => $full_name,
        'phone_number'   => $phone,
        'email'          => $email,
        'username'       => $username,
        'password_hash'  => password_hash($password, PASSWORD_BCRYPT),
        'department'     => $department,
        'position'       => $position,
        'role'           => $role,
    ]
);

header('Location: /users'); // or /dashboard if you don’t have /users yet
exit;
