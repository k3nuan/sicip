@extends('tablar::page')

@section('title', 'Detalles')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Detalles ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('add-databases.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M5 12l14 0" />
                              <path d="M5 12l6 6" />
                              <path d="M5 12l6 -6" />
                            </svg>
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detalles de la BD</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Servidor:</strong>
{{ $addDatabase->addServer->name }}
</div>
<div class="form-group">
<strong>App Id:</strong>
{{ $addDatabase->app_id }}
</div>
<div class="form-group">
<strong>Manejador y Versión:</strong>
{{ $addDatabase->management_details }}
</div>
<div class="form-group">
<strong>Nombre de la Instancia:</strong>
{{ $addDatabase->instance_name }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


