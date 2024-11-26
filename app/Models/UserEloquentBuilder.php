<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Builder;

class UserEloquentBuilder extends Builder
{
    public function validated(): static
    {
        return $this->whereNotNull('email_verified_at');
    }

    public function example(): static
    {
        return $this->whereBetween('created_at', [now()->subDays(30), now()]);
    }
}
