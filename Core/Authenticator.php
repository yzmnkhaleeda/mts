<?php

namespace Core;

class Authenticator
{
    public function attempt(array $attributes, Database $db): bool
    {
        $login = trim($attributes['login'] ?? '');
        $password = $attributes['password'] ?? '';

        $user = $db->query(
            'SELECT * FROM users WHERE email = :login OR username = :login LIMIT 1',
            ['login' => $login]
        )->find();

        if (! $user) {
            return false;
        }

        // If your DB currently stores plain "password123", this will FAIL.
        // Fix by hashing passwords (script below).
        if (! password_verify($password, $user['password_hash'])) {
            return false;
        }

        $this->login($user);

        return true;
    }

    public function login(array $user): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        session_regenerate_id(true);

        $_SESSION['user'] = [
            'id'       => $user['user_id'],
            'email'    => $user['email'],
            'username' => $user['username'],
            'role'     => $user['role'] ?? 'staff',
            'name'     => $user['full_name'] ?? null,
        ];
    }

    public function logout(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        session_destroy();
    }
}
