<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::updateOrCreate(
            ['email' => 'tongcohermogenes@gmail.com'], // pang-check kung existing na
            [
                'name' => 'Hermogenes Tongco Admin',
                'password' => Hash::make('watchmen1985'),
                'email_verified_at' => now(), // para hindi hingan ng email verification
            ]
        );
    }
}
