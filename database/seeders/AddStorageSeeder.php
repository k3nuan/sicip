<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddStorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('add_storages')->insert([
            'server_id'     => 1,
            'box'           => 'Fantec Src-4240X07',
            'type'          => 'SAN',
            'size_gb'       => 1000,
            'vol_id'        => '',
            'lun_id'        => 'LUN 0: System boot volume',
            'user_id'       => 7
        ]);

        DB::table('add_storages')->insert([
            'server_id'     => 2,
            'box'           => 'Silverstone Sst-rm41-506',
            'type'          => 'NAS',
            'size_gb'       => 1000,
            'vol_id'        => 'Demo Volume',
            'lun_id'        => '',
            'user_id'       => 2
        ]);
    }
}
