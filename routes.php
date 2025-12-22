<?php

$router->get('/', 'sessions/create.php')->only('guest');
$router->post('/', 'sessions/store.php')->only('guest');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');

$router->get('/dashboard', 'index.php')->only('auth');

$router->get('/about', 'about.php')->only('auth');
$router->get('/contact', 'contact.php')->only('auth');

$router->get('/suppliers', 'suppliers/index.php')->only('auth');

$router->get('/supplier', 'suppliers/show.php')->only('auth');
$router->delete('/supplier', 'suppliers/destroy.php')->only('auth');

$router->get('/suppliers/edit', 'suppliers/edit.php')->only('auth');
$router->patch('/suppliers/edit', 'suppliers/update.php')->only('auth');

$router->get('/suppliers/create', 'suppliers/create.php')->only('auth');
$router->post('/suppliers/create', 'suppliers/store.php')->only('auth');

$router->get('/customers', 'customers/index.php')->only('auth');

$router->get('/customer', 'customers/show.php')->only('auth');
$router->delete('/customer', 'customers/destroy.php')->only('auth');

$router->get('/customers/edit', 'customers/edit.php')->only('auth');
$router->patch('/customers/edit', 'customers/update.php')->only('auth');

$router->get('/customers/create', 'customers/create.php')->only('auth');
$router->post('/customers/create', 'customers/store.php')->only('auth');

$router->get('/admin/users', 'admin/users/index.php')->only('admin');

$router->get('/admin/users/show', 'admin/users/show.php')->only('admin');

$router->get('/admin/users/edit', 'admin/users/edit.php')->only('admin');
$router->patch('/admin/users/edit', 'admin/users/update.php')->only('admin');

$router->delete('/admin/users/delete', 'admin/users/destroy.php')->only('admin');

$router->get('/admin/users/create', 'admin/users/create.php')->only('admin');
$router->post('/admin/users', 'admin/users/store.php')->only('admin');
