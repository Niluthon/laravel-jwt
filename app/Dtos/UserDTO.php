<?php

namespace App\Dtos;

use App\Models\User;

readonly final class UserDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
        public ?string $created_at,
    ) { }

    public static function fromEloquent(User $user): self
    {
        $user = $user->toArray();

        return new self(
            $user['id'],
            $user['name'],
            $user['email'],
            $user['created_at'],
        );
    }
}
