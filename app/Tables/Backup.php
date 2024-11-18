<?php

namespace App\Tables;

use App\Models\AddBackup;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class Backup extends DataTable
{
    public function __construct()
    {


        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $this->setDataSource(AddBackup::join('add_servers', 'add_backups.server_id', '=', 'add_servers.id')
                ->select('add_servers.name', 'schema', 'schedule'))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'schema', title: 'Esquema', search: true)
                ->column(name: 'schedule', title: 'Horario', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);
        } else {
            $this->setDataSource(AddBackup::join('add_servers', 'add_backups.server_id', '=', 'add_servers.id')
                ->select('add_servers.name', 'schema', 'schedule')
                ->where('add_backups.user_id', auth()->id()))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'schema', title: 'Esquema', search: true)
                ->column(name: 'schedule', title: 'Horario', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);          
        }


    }
}
