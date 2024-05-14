<?php

namespace Database\Seeders;

use App\Models\MasterRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'student'],
        ];

        MasterRole::upsert($roles, 'id');
    }
}
