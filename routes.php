<?php

$router->get('/', 'controllers/sessions/create.php')->only('guest');
$router->post('/', 'controllers/sessions/store.php')->only('guest');
$router->delete('/sessions', 'controllers/sessions/destroy.php')->only('auth');

$router->get('/dashboard', 'controllers/index.php')->only('auth');

$router->get('/suppliers', 'controllers/suppliers/index.php')->only('auth');

$router->get('/supplier', 'controllers/suppliers/show.php')->only('auth');
$router->delete('/supplier', 'controllers/suppliers/destroy.php')->only('auth');

$router->get('/suppliers/edit', 'controllers/suppliers/edit.php')->only('auth');
$router->patch('/suppliers/edit', 'controllers/suppliers/update.php')->only('auth');

$router->get('/suppliers/create', 'controllers/suppliers/create.php')->only('auth');
$router->post('/suppliers/create', 'controllers/suppliers/store.php')->only('auth');

$router->get('/admin/users/create', 'controllers/users/create.php')->only('admin');
$router->post('/admin/users', 'controllers/users/store.php')->only('admin');
