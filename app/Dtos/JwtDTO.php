<?php

namespace App\Dtos;

readonly class JwtDTO
{
    public function __construct(
        public string $token,
    ) { }
}
