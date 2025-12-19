<?php

namespace Core\Middleware;

class Auth
{
    public function handle(): void
    {
        if (! isset($_SESSION['user'])) {
            header('Location: /');
            exit;
        }
    }
}
