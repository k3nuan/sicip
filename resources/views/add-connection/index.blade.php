@extends('tablar::page')

@section('title')
    Conecciones
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Listado
                    </div>
                    <h2 class="page-title">
                        {{ __('Conecciones ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('add-connections.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Agregar
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
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Mostrar
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                                               aria-label="Invoices count">
                                    </div>
                                    entradas
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive min-vh-100">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <!--<th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>-->
                                    
										<th>Servidor</th>
										<th>Dirección Ip</th>
										<th>Protocolo</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
										<th>UserID</th>

                                    <th class="w-1"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse ($addConnections as $addConnection)
                                    <tr>
                                        <!--<td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select addConnection"></td>-->
                                        
											<td><a href="{{ route('add-connections.show',$addConnection->id) }}">{{ $addConnection->addServer->name }}</a></td>
											<td>{{ $addConnection->ip_address }}</td>
											<td>{{ $addConnection->type }}</td>
                                            <td>{{ $addConnection->user }}</td>
                                            <td>{{ $addConnection->password }}</td>
											<td>{{ $addConnection->user_id }}</td>

                                        <td>
                                            <div class="btn-list flex-nowrap">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown">
                                                        Acciones
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                           href="{{ route('add-connections.show',$addConnection->id) }}">
                                                            Ver
                                                        </a>
                                                        <a class="dropdown-item"
                                                           href="{{ route('add-connections.edit',$addConnection->id) }}">
                                                            Editar
                                                        </a>
                                                        <form
                                                            action="{{ route('add-connections.destroy',$addConnection->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    onclick="if(!confirm('Estas seguro?')){return false;}"
                                                                    class="dropdown-item text-red"><i
                                                                    class="fa fa-fw fa-trash"></i>
                                                                Eliminar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td>Sin datos....</td>
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                       <div class="card-footer d-flex align-items-center">
                            {!! $addConnections->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
