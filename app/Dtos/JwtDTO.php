<?php

namespace App\Dtos;

readonly final class JwtDTO
{
    public function __construct(
        public string $token,
    ) { }
}
