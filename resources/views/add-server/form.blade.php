
<!-- SERIAL -->
<div class="form-group mb-3">
    <label class="form-label">   Serial del Servidor</label>
    <div>
        <x-tom-select name="serial" placeholder="" remote-data="true" item-search-route="server.serial" create="true" max-items="1" class="{{ ($errors->has('serial') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('serial', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


<!-- NAME -->
<div class="form-group mb-3">
    <label class="form-label">   Nombre del Servidor</label>
    <div>
        <x-tom-select name="name" placeholder="" remote-data="true" item-search-route="server.name" create="true" class="{{ ($errors->has('name') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- BRAND -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de la Marca</label>
    <div>
        <x-tom-select name="brand_details" value="{{ $addServer->brand_details }}" placeholder="" remote-data="true" item-search-route="server.brand" create="true" class="{{ ($errors->has('brand_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('brand_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> IBM Power Systems E850C</small>
    </div>
</div>

<!-- CPU -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del Procesador</label>
    <div>
        <x-tom-select name="cpu_details" value="{{ $addServer->cpu_details }}" placeholder="" remote-data="true" item-search-route="server.cpu" create="true" class="{{ ($errors->has('cpu_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('cpu_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Intel Core i7-12700K 3.6GHz/5GHz</small>
    </div>
</div>

<!-- CAPACITY -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de Capacidad</label>
    <div>
        <x-tom-select name="capacity_details" value="{{ $addServer->capacity_details }}" placeholder="" remote-data="true" item-search-route="server.capacity" create="true" class="{{ ($errors->has('capacity_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('capacity_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> 12GB RAM 1TB SSD 2Cores</small>
    </div>
</div>

<!-- TYPE -->
<div class="form-group mb-3">
    <label class="form-label">   Tipo de Servidor</label>
    <div>
        <x-tom-select name="type" value="{{ $addServer->type }}" placeholder="" remote-data="true" item-search-route="server.type" create="true" class="{{ ($errors->has('type') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Rackable, Blade, Tower</small>
    </div>
</div>

<!-- RAID -->
<div class="form-group mb-3">
    <label class="form-label">   RAID</label>
    <div>
        <x-tom-select name="raid" value="{{ $addServer->raid }}" placeholder="" remote-data="true" item-search-route="server.raid" create="true" class="{{ ($errors->has('raid') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('raid', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- MULTIPATH -->
<div class="form-group mb-3">
    <label class="form-label">   Es Multipaso?</label>
    <div>
        <x-toggle name="is_multipath" value="0" />
        {!! $errors->first('is_multipath', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- BOND -->
<div class="form-group mb-3">
    <label class="form-label">   Es Bond?</label>
    <div>
        <x-toggle name="is_bond" value="0" />
        {!! $errors->first('is_bond', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- VIRTUAL -->
<div class="form-group mb-3">
    <label class="form-label">   Es Servidor Virtual?</label>
    <div>
        <x-toggle name="is_virtual" value="0" />
        {!! $errors->first('is_virtual', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- VIRTUALIZER -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del Virtualizador</label>
    <div>
        <x-tom-select name="virtualizer_details" value="{{ $addServer->virtualizer_details }}" placeholder="" remote-data="true" item-search-route="server.virtualizer" create="true" class="{{ ($errors->has('virtualizer_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('virtualizer_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> OpenVZ, QEMU, VMware Workstation Pro</small>
    </div>
</div>

<!-- LOCATION -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de Ubicación</label>
    <div>
        <x-tom-select name="location_details" value="{{ $addServer->location_details }}" placeholder="" remote-data="true" item-search-route="server.location" create="true" class="{{ ($errors->has('location_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('location_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Los Teques Intevep pasillo 2 rack 400</small>
    </div>
</div>

<fieldset class="form-fieldset">


<!-- OS -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del S.O.</label>
    <div>
        <x-tom-select name="os_details" value="{{ $addServer->os_details }}" placeholder="" remote-data="true" item-search-route="server.system" create="true" class="{{ ($errors->has('os_details') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('os_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Linux 5.15.0 x86_64 Ubuntu 22.04 LTS</small>
    </div>
</div>

<!-- ENV -->
<div class="form-group mb-3">
    <label class="form-label">   Entorno</label>
    <div>
        <x-tom-select name="enviroment" placeholder="" remote-data="true" item-search-route="server.env" create="true" class="{{ ($errors->has('enviroment') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('enviroment', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Produccion, Desarrollo, Testing</small>
    </div>
</div>

<!-- STATUS -->
<div class="form-group mb-3">
    <label class="form-label">   Status</label>
    <div>
        <x-tom-select name="status" placeholder="" remote-data="true" item-search-route="server.status" create="true" class="{{ ($errors->has('status') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Operativo, Apagado, Desincorporado</small>
    </div>
</div>

<!-- NOTES -->
<div class="form-group mb-3">
    <label class="form-label">   Observaciones</label>
    <div>
        {{ Form::textarea('notes', $addServer->notes, ['class' => 'form-control' .
        ($errors->has('notes') ? ' is-invalid' : ''), 'placeholder' => '', 'rows' => '4']) }}
        {!! $errors->first('notes', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

</fieldset>


<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-servers.index') }}" class="btn btn-danger btn-test">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l14 0" />
                  <path d="M5 12l6 6" />
                  <path d="M5 12l6 -6" />
                </svg>
                Volver
            </a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Guardar
            </button>
        </div>
    </div>
</div>




@section('js')
    <script type="module">
        console.log("Test 2");
    </script>
@stop