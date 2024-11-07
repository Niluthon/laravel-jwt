<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->sequence(
                ['email_verified_at' => now()],
//                ['email_verified_at' => null],
            )
            ->sequence(fn ($sequence) => [
                'email' => "test{$sequence->index}@test.com",
            ])->createQuietly();
    }
}
