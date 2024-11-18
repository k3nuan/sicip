<?php

namespace App\Tables;

use App\Models\AddServer;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class Server extends DataTable
{
    public function __construct()
    {

        $this->setDataSource(AddServer::select('id', 'serial', 'name', 'brand_details', 'cpu_details', 'type', 'raid', 'is_multipath', 'is_bond', 'is_virtual', 'virtualizer_details', 'enviroment', 'status', 'os_details', 'location_details'))
            ->column(name: 'id', title: 'ID')
            ->column(name: 'serial', title: 'Serial', search: true)
            ->column(name: 'name', title: 'Nombre', search: true)
            ->column(name: 'brand_details', title: 'Marca', search: true)
            ->column(name: 'cpu_details', title: 'CPU', search: true)
            ->column(name: 'type', title: 'Tipo', search: true)
            ->column(name: 'raid', title: 'RAID', search: true, visible: false)
            ->column(name: 'is_multipath', title: 'is_multipath', search: true, visible: false)
            ->column(name: 'is_bond', title: 'is_bond', search: true, visible: false)
            ->column(name: 'is_virtual', title: 'is_virtual', search: true, visible: false)
            ->column(name: 'virtualizer_details', title: 'virtualizer_details', search: true, visible: false)
            ->column(name: 'enviroment', title: 'Entorno', search: true, visible: true)
            ->column(name: 'status', title: 'Status', search: true, visible: true)
            ->column(name: 'os_details', title: 'O.S.', search: true, visible: true)
            ->column(name: 'location_details', title: 'Ubicación', search: true, visible: true)
            //->column(name: 'action', title: 'Acciones', callback: function ($item) {
            //    return view('common.action', ['item' => $item])->render();
            //}, formatter: 'html')
            ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
            ->paginate(10);
    }
}
