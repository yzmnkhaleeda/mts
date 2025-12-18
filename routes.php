<?php

$router->get('/', 'controllers/login.php');

$router->get('/dashboard', 'controllers/dashboard.php');

$router->get('/suppliers', 'controllers/suppliers/index.php');

$router->get('/supplier', 'controllers/suppliers/show.php');
$router->delete('/supplier', 'controllers/suppliers/destroy.php'); //delete 

$router->get('/suppliers/edit', 'controllers/suppliers/edit.php');
$router->patch('/suppliers/edit', 'controllers/suppliers/update.php'); //update


$router->get('/suppliers/create', 'controllers/suppliers/create.php');
$router->post('/suppliers/create', 'controllers/suppliers/store.php'); //store errors

$router->get('/register', 'controllers/users/create.php');
$router->post('/register', 'controllers/users/store.php');

$router->get('/', 'controllers/index.php');

// $router->get('/login', 'controllers/login.php')->only('guest');
// // $router->post('/login', 'controllers/sessions/store.php')->only('guest');
// // $router->post('/logout', 'controllers/sessions/destroy.php')->only('auth');

// $router->get('/dashboard', 'controllers/dashboard.php')->only('auth');

// $router->get('/suppliers', 'controllers/suppliers/index.php')->only('auth');

// $router->get('/supplier', 'controllers/suppliers/show.php')->only('auth');
// $router->delete('/supplier', 'controllers/suppliers/destroy.php')->only('auth');

// $router->get('/suppliers/edit', 'controllers/suppliers/edit.php')->only('auth');
// $router->patch('/suppliers/edit', 'controllers/suppliers/update.php')->only('auth');

// $router->get('/suppliers/create', 'controllers/suppliers/create.php')->only('auth');
// $router->post('/suppliers/create', 'controllers/suppliers/store.php')->only('auth');

// $router->get('/register', 'controllers/users/create.php')->only('admin');
// $router->post('/register', 'controllers/users/store.php')->only('admin');