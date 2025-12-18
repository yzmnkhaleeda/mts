<?php

namespace Core\Middleware;

class Auth{
    public function handle(){
        $loggedIn = ($_SESSION['user_id'] ?? false) || ($_SESSION['admin_id'] ?? false);

         if (!$loggedIn) {
             header('Location: /dashboard'); // your login page
             exit;
         }
}
}