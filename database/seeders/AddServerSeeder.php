<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Insert your data here using the DB facade
        // For example:
        DB::table('add_servers')->insert([
            'serial'                => '123456-123',
            'name'                  => 'Servidor-01',
            'brand_details'         => 'HPE ProLiant DL360 Gen10',
            'cpu_details'           => 'Intel Core i7-12700K 3.6GHz/5GHz',
            'capacity_details'      => '12GB RAM 1TB SSD 2Cores',
            'type'                  => 'Tower',
            'raid'                  => '',
            'is_multipath'          => false,
            'is_bond'               => false,
            'is_virtual'            => false,
            'virtualizer_details'   => '',
            'location_details'      => 'Los Teques Intevep pasillo 2 rack 400',
            'os_details'            => 'Linux 5.15.0 x86_64 Ubuntu 22.04 LTS',
            'enviroment'            => 'Desarrollo',
            'status'                => 'Operativo',
            'notes'                 => 'Servidor Fisico',
            'user_id'               => 1,
        ]);

        DB::table('add_servers')->insert([
            'serial'                => '123456-ABCD',
            'name'                  => 'Servidor-02',
            'brand_details'         => 'IBM Power Systems E850C',
            'cpu_details'           => 'AMD Ryzen 9 5900X, 3.7GHz/4.8GHz',
            'capacity_details'      => '24GB RAM 1TB SSD 8Cores',
            'type'                  => 'Blade',
            'raid'                  => '',
            'is_multipath'          => false,
            'is_bond'               => false,
            'is_virtual'            => false,
            'virtualizer_details'   => '',
            'location_details'      => 'Los Teques Intevep pasillo 4 rack 200',
            'os_details'            => 'Windows Server 2022 20H2 x64',
            'enviroment'            => 'Produccion',
            'status'                => 'Operativo',
            'notes'                 => 'Servidor Fisico',
            'user_id'               => 4,
        ]);


        DB::table('add_servers')->insert([
            'serial'                => '123456-123-4',
            'name'                  => 'Servidor-04',
            'brand_details'         => 'PowerEdge R230',
            'cpu_details'           => 'Intel Core i7-12700K 3.6GHz/5GHz',
            'capacity_details'      => '12GB RAM 1TB SSD 4Cores',
            'type'                  => '',
            'raid'                  => '',
            'is_multipath'          => false,
            'is_bond'               => false,
            'is_virtual'            => false,
            'virtualizer_details'   => '',
            'location_details'      => 'Los Teques Intevep pasillo 1 rack 100',
            'os_details'            => 'Linux 5.15.0 x86_64 Ubuntu 22.04 LTS',
            'enviroment'            => 'Desarrollo',
            'status'                => 'Operativo',
            'notes'                 => 'Servidor Fisico',
            'user_id'               => 2,
        ]);


        DB::table('add_servers')->insert([
            'serial'                => 'ABCD-54321',
            'name'                  => 'ServidorTest-03',
            'brand_details'         => 'IBM Power Systems E850C',
            'cpu_details'           => 'AMD Ryzen 9 5900X, 3.7GHz/4.8GHz',
            'capacity_details'      => '24GB RAM 1TB SSD 8Cores',
            'type'                  => 'Rackable',
            'raid'                  => 'RAD 01',
            'is_multipath'          => true,
            'is_bond'               => true,
            'is_virtual'            => false,
            'virtualizer_details'   => 'VMware Workstation Pro',
            'location_details'      => 'Caracas',
            'os_details'            => 'Windows Server 2022 20H2 x64',
            'enviroment'            => 'Testing',
            'status'                => 'Apagado',
            'notes'                 => 'Servidor Fisico y Virtualizador',
            'user_id'               => 1,
        ]);
    }
}
