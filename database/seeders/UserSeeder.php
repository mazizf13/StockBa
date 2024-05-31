<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin Role',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminq1w2e3'),
            'role' => 'admin'
        ]);
        $admin->assignRole($adminRole);

        $user = User::create([
            'name' => 'User Role',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('userq1w2e3'),
            'role' => 'user'
        ]);
        $user->assignRole($userRole);
    }
}
