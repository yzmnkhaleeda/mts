<?php

if ($_SESSION['user_id'] ?? false) {
    header('Location: /dashboard');
    exit;
}
view('login/login.view.php', [
    'errors' => []
]);
