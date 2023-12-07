<?php

namespace App\Auth;

use App\Models\User;

class Authenticator extends DummyAuthenticator
{
    public function login($login, $password): bool
    {
        $users = User::getAll();
        foreach ($users as $user):
            if ($login == $user->getNick() && $password == $user->getPassword()) {
                $_SESSION['user'] = $login;
                return true;
            }
            endforeach;

        return false;
    }

    public function register($login, $password): bool
    {
        $users = User::getAll();
        foreach ($users as $user):
            if ($login == $user->getNick()) {
                return false;
            }
        endforeach;

        $_SESSION['user'] = $login;
        return true;
    }
}
