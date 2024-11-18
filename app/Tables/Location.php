<?php

namespace App\Tables;

use App\Models\AddServer;
use Takielias\TablarKit\DataTable\DataTable;
use Takielias\TablarKit\Enums\ExportType;

class Location extends DataTable
{
    public function __construct()
    {


        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('Super-Admin')) {
            $this->setDataSource(AddServer::select('name', 'location_details'))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'location_details', title: 'Ubicación', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);
        } else {
            $this->setDataSource(AddServer::select('name', 'location_details')
                ->where('user_id', auth()->id()))
                ->column(name: 'name', title: 'Servidor', search: true)
                ->column(name: 'location_details', title: 'Ubicación', search: true)
                ->setExportTypes([ExportType::CSV, ExportType::PDF, ExportType::XLS])
                ->paginate(10);          
        }


    }
}
