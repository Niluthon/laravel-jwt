<?php

namespace App\Services\Auth;


use App\Contracts\Auth\AuthServiceContract;
use App\Dtos\JwtDTO;
use App\Dtos\UserDTO;
use App\Models\User;


class AuthService implements AuthServiceContract
{
    public function authenticate(string $login, string $password): JwtDTO
    {

        $token = auth()->attempt(
            [
                "email" => $login,
                "password" => $password
            ]
        );

        return new JwtDTO(token: $token);
    }

    public function logout(): bool
    {
        auth()->logout();

        $user = auth()->user();

        if (!$user) {
            return true;
        }

        return false;
    }

    public function profile(): UserDTO
    {
        return UserDTO::fromEloquent(auth()->user());
    }
}
