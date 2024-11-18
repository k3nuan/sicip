<?php

namespace App\Tables;

use App\Models\AddConnection;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class Connection extends DataTable
{
    public function __construct()
    {

        /*$this->setDataSource(AddConnection::select('server_id', 'ip_address', 'user', 'password'))
            ->column(name: 'server_id', title: 'Servidor', search: true, visible: false)
            ->column(name: 'ip_address', title: 'Dirección IP', search: true)
            ->column(name: 'user', title: 'Usuario', search: true)
            ->column(name: 'password', title: 'Contraseña', search: false)
            ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
            ->paginate(10);*/

        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $this->setDataSource(AddConnection::join('add_servers', 'add_connections.server_id', '=', 'add_servers.id')
                ->select('add_connections.id', 'add_servers.name as name', 'ip_address', 'user', 'password'))
                ->column(name: 'server_id', title: 'Servidor ID', search: false, visible: false)
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'ip_address', title: 'Dirección IP', search: true)
                ->column(name: 'user', title: 'Usuario', search: true)
                ->column(name: 'password', title: 'Contraseña', search: false)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);
        } else {
            $this->setDataSource(AddConnection::join('add_servers', 'add_connections.server_id', '=', 'add_servers.id')
                ->select('add_connections.id', 'add_servers.name as name', 'ip_address', 'user', 'password')
                ->where('add_connections.user_id', auth()->id()))
                ->column(name: 'server_id', title: 'Servidor ID', search: false, visible: false)
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'ip_address', title: 'Dirección IP', search: true)
                ->column(name: 'user', title: 'Usuario', search: true)
                ->column(name: 'password', title: 'Contraseña', search: false)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);          
        }


    }
}
