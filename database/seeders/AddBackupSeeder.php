<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddBackupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('add_backups')->insert([
            'server_id'     => 1,
            'schema'        => 'Full',
            'schedule'      => 'Lunes 22:00',
            'user_id'       => 7
        ]);

        DB::table('add_backups')->insert([
            'server_id'     => 2,
            'schema'        => 'Incremental',
            'schedule'      => 'Martes y Jueves 02:00',
            'user_id'       => 7
        ]);
    }
}
