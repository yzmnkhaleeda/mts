<?php

$router->get('/', 'sessions/create.php')->only('guest');
$router->post('/', 'sessions/store.php')->only('guest');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');

$router->get('/dashboard', 'index.php')->only('auth');

$router->get('/suppliers', 'suppliers/index.php')->only('auth');

$router->get('/supplier', 'suppliers/show.php')->only('auth');
$router->delete('/supplier', 'suppliers/destroy.php')->only('auth');

$router->get('/suppliers/edit', 'suppliers/edit.php')->only('auth');
$router->patch('/suppliers/edit', 'suppliers/update.php')->only('auth');

$router->get('/suppliers/create', 'suppliers/create.php')->only('auth');
$router->post('/suppliers/create', 'suppliers/store.php')->only('auth');

$router->get('/admin/users/create', 'users/create.php')->only('admin');
$router->post('/admin/users', 'users/store.php')->only('admin');
