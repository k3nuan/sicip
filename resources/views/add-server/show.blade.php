@extends('tablar::page')

@section('title', 'Detalles del Servidor')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Ver
                    </div>
                    <h2 class="page-title">
                        {{ __('Detalles del Servidor ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('add-servers.index') }}" class="btn btn-primary d-none d-sm-inline-block">
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
                            <h3 class="card-title">Detalles del Servidor</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Nombre:</strong>
{{ $addServer->name }}
</div>
<div class="form-group">
<strong>Entorno:</strong>
{{ $addServer->enviroment }}
</div>
<div class="form-group">
<strong>Status:</strong>
{{ $addServer->status }}
</div>
<div class="form-group">
<strong>Notes:</strong>
{{ $addServer->notes }}
</div>
<div class="form-group">
<strong>Serial:</strong>
{{ $addServer->serial }}
</div>
<div class="form-group">
<strong>Brand Details:</strong>
{{ $addServer->brand_details }}
</div>
<div class="form-group">
<strong>Cpu Details:</strong>
{{ $addServer->cpu_details }}
</div>
<div class="form-group">
<strong>Capacity Details:</strong>
{{ $addServer->capacity_details }}
</div>
<div class="form-group">
<strong>Type:</strong>
{{ $addServer->type }}
</div>
<div class="form-group">
<strong>Raid:</strong>
{{ $addServer->raid }}
</div>
<div class="form-group">
<strong>Is Multipath:</strong>
{{ $addServer->is_multipath }}
</div>
<div class="form-group">
<strong>Is Bond:</strong>
{{ $addServer->is_bond }}
</div>
<div class="form-group">
<strong>Is Virtualizer:</strong>
{{ $addServer->is_virtualizer }}
</div>
<div class="form-group">
<strong>Virtualizer Details:</strong>
{{ $addServer->virtualizer_details }}
</div>
<div class="form-group">
<strong>Location Details:</strong>
{{ $addServer->location_details }}
</div>
<div class="form-group">
<strong>Os Details:</strong>
{{ $addServer->os_details }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

