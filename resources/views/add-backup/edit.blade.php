@extends('tablar::page')

@section('title', 'Editar Respaldo')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Actualizar
                    </div>
                    <h2 class="page-title">
                        {{ __('Editar Respaldo ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('add-backups.index') }}" class="btn btn-primary d-none d-sm-inline-block">
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
            @if(config('tablar','display_alert'))
                @include('tablar::common.alert')
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detalles</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST"
                                  action="{{ route('add-backups.update', $addBackup->id) }}" id="ajaxForm" role="form"
                                  enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf
                                @include('add-backup.form-edit')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



