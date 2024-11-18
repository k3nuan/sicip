<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('add_apps')->insert([
            'server_id'     => 1,
            'acronym'       => 'sisp-miranda-test',
            'name'          => 'Sistema Plan Miranda Testing',
            'description'   => 'Una plataforma integral diseñada para optimizar la gestión de proyectos urbanos en el estado Miranda.',
            'url'           => 'http://127.0.0.1:8000/sisplan',
            'ait_user'      => 'm1gu3l',
            'ait_name'      => 'Miguel Perez',
            'func_user'     => 'm1gu3l',
            'func_name'     => 'Miguel Perez',
            'func_telf'     => '0414-123-1212',
            'user_id'       => 6
        ]);

        DB::table('add_apps')->insert([
            'server_id'     => 2,
            'acronym'       => 'sisp-miranda-prod',
            'name'          => 'Sistema Plan Miranda',
            'description'   => 'Una plataforma integral diseñada para optimizar la gestión de proyectos urbanos en el estado Miranda.',
            'url'           => 'http://example.com/sisplan',
            'ait_user'      => 'm1gu3l',
            'ait_name'      => 'Miguel Perez',
            'func_user'     => 'm1gu3l',
            'func_name'     => 'Miguel Perez',
            'func_telf'     => '0414-123-1212',
            'user_id'       => 1
        ]);
    }
}
