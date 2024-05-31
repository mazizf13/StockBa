<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check if the roles already exist before creating them
        if (!Role::where('name', 'admin')->exists()) {
            Role::create([
                'name' => 'admin',
                'guard_name' => 'web',
            ]);
        }

        if (!Role::where('name', 'user')->exists()) {
            Role::create([
                'name' => 'user',
                'guard_name' => 'web',
            ]);
        }
    }
}
