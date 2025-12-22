<?php

namespace Core;

class Authenticator
{
    public function attempt($login, $password)
    {
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :login OR username = :login', [
            'login' => $login,
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                $this->login($user);
                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id'       => $user['user_id'],
            'email'    => $user['email'],
            'username' => $user['username'],
            'role'     => $user['role'] ?? 'staff',
            'name'     => $user['full_name'] ?? null,
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}