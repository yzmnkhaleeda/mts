<?php

namespace Http\Forms;
use Core\Validator;

class LoginForm 
{
    protected $errors = [];

    public function validate($login, $password)
    {
        $errors = [];

        if (! Validator::string($login)) {
            $this->errors['login'] = 'Email/username is required.';
        }

        if (! Validator::string($password, 3)) {
            $this->errors['password'] = 'Password is required.';
        }

        return empty($this->errors);

    }

    public function errors()
    {
        return $this->errors;
    }

      public function error($field, $message)
    {
        return $this->errors = $message;
    }
}