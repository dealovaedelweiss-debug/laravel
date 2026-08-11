<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'name' => 'Administration',
                'is_active' => true,
            ],
            [
                'name' => 'Kasir',
                'is_active' => true,
            ],
            [
                'name' => 'Pimpinan',
                'is_active' => true,
            ],
        ]);
    }
}
