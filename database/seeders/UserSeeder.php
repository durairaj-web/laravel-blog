<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@blog.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$DaRACn2Q35cuJMxkU5d0DeGoBe8GEbcFoSxcDioXi1iCrudaAJBBK', // password
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Durairaj',
            'email' => 'durairaj.web@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$DaRACn2Q35cuJMxkU5d0DeGoBe8GEbcFoSxcDioXi1iCrudaAJBBK', // password
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole('user');

        User::factory()->count(50)->create();
    }
}
