<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Ramsey\Uuid\Uuid;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'id'=>Uuid::uuid4()->toString(),
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'id'=>Uuid::uuid4()->toString(),
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
