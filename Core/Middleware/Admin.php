<?php

namespace Core\Middleware;

class Admin
{
    public function handle(): void
    {
        if (! isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        if (($_SESSION['user']['role'] ?? 'staff') !== 'admin') {
            http_response_code(403);
            require base_path('views/403.php');
            exit;
        }
    }
}
