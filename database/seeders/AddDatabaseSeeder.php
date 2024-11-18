<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('add_databases')->insert([
            'server_id'             => 1,
            'app_id'                => 1,
            'management_details'    => 'MariaDB 11.7',
            'instance_name'         => 'NiIdea-01',
            'user_id'               => 5
        ]);

        DB::table('add_databases')->insert([
            'server_id'             => 1,
            'app_id'                => 2,
            'management_details'    => 'PostgreSQL 15',
            'instance_name'         => 'Nidea-Abc2',
            'user_id'               => 5
        ]);
    }
}
