@extends('tablar::page')

@section('title')
    Servidor Almacenamiento
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Consultas
                    </div>
                    <h2 class="page-title">
                        Servidor Almacenamiento
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body border-bottom py-3">
                            <x-tabulator :table="$table"></x-tabulator>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



