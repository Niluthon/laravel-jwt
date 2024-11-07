<?php

namespace App\Contracts\Auth;

use App\Dtos\JwtDTO;
use App\Dtos\UserDTO;

interface AuthServiceContract
{
    public function authenticate(string $login, string $password): JwtDTO;

    public function profile(): UserDTO;

    public function logout(): bool;
}

