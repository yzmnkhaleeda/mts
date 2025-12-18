<?php

// Home: decide what you want. I recommend redirect to /dashboard if logged in, else /login
$router->get('/', 'controllers/index.php');

// --- AUTH (login only) ---
$router->get('/login', 'controllers/sessions/create.php')->only('guest');
$router->post('/sessions', 'controllers/sessions/store.php')->only('guest');
$router->delete('/sessions', 'controllers/sessions/destroy.php')->only('auth');

// --- DASHBOARD ---
$router->get('/dashboard', 'controllers/dashboard.php')->only('auth');

// --- SUPPLIERS (protected) ---
$router->get('/suppliers', 'controllers/suppliers/index.php')->only('auth');

$router->get('/supplier', 'controllers/suppliers/show.php')->only('auth');
$router->delete('/supplier', 'controllers/suppliers/destroy.php')->only('auth');

$router->get('/suppliers/edit', 'controllers/suppliers/edit.php')->only('auth');
$router->patch('/suppliers/edit', 'controllers/suppliers/update.php')->only('auth');

$router->get('/suppliers/create', 'controllers/suppliers/create.php')->only('auth');
$router->post('/suppliers/create', 'controllers/suppliers/store.php')->only('auth');

// --- ADMIN-ONLY user creation (replaces public register) ---
$router->get('/admin/users/create', 'controllers/users/create.php')->only('admin');
$router->post('/admin/users', 'controllers/users/store.php')->only('admin');
