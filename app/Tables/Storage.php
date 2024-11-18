<?php

namespace App\Tables;

use App\Models\AddStorage;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class Storage extends DataTable
{
    public function __construct()
    {


        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $this->setDataSource(AddStorage::join('add_servers', 'add_storages.server_id', '=', 'add_servers.id')
                ->select('add_servers.name', 'box', 'size_gb', 'lun_id', 'vol_id'))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'box', title: 'Caja de Almacenamiento', search: true)
                ->column(name: 'size_gb', title: 'Tamaño (GB)', search: true)
                ->column(name: 'lun_id', title: 'LUN ID', search: true)
                ->column(name: 'vol_id', title: 'Vol ID', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);
        } else {
            $this->setDataSource(AddStorage::join('add_servers', 'add_storages.server_id', '=', 'add_servers.id')
                ->select('add_servers.name', 'box', 'size_gb', 'lun_id', 'vol_id')
                ->where('add_storages.user_id', auth()->id()))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'box', title: 'Caja de Almacenamiento', search: true)
                ->column(name: 'size_gb', title: 'Tamaño (GB)', search: true)
                ->column(name: 'lun_id', title: 'LUN ID', search: true)
                ->column(name: 'vol_id', title: 'Vol ID', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);          
        }


    }
}
