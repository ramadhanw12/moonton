<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Moonton',
            'email' => 'admin@moonton.test',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');
    }
}
