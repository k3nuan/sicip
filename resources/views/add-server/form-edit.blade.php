
<!-- SERIAL -->
<div class="form-group mb-3">
    <label class="form-label">   Serial del Servidor</label>
    <div>
        {{ Form::text('serial', $addServer->serial, ['class' => 'form-control' .
        ($errors->has('serial') ? ' is-invalid' : ''), 'placeholder' => 'Serial']) }}
        {!! $errors->first('serial', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>


<!-- NAME -->
<div class="form-group mb-3">
    <label class="form-label">   Nombre del Servidor</label>
    <div>
        {{ Form::text('name', $addServer->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- BRAND -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de la Marca</label>
    <div>
        {{ Form::text('brand_details', $addServer->brand_details, ['class' => 'form-control' .
        ($errors->has('brand_details') ? ' is-invalid' : ''), 'placeholder' => 'Brand Details']) }}
        {!! $errors->first('brand_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> IBM Power Systems E850C</small>
    </div>
</div>

<!-- CPU -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del Procesador</label>
    <div>
        {{ Form::text('cpu_details', $addServer->cpu_details, ['class' => 'form-control' .
        ($errors->has('cpu_details') ? ' is-invalid' : ''), 'placeholder' => 'Cpu Details']) }}
        {!! $errors->first('cpu_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Intel Core i7-12700K 3.6GHz/5GHz</small>
    </div>
</div>

<!-- CAPACITY -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de Capacidad</label>
    <div>
        {{ Form::text('capacity_details', $addServer->capacity_details, ['class' => 'form-control' .
        ($errors->has('capacity_details') ? ' is-invalid' : ''), 'placeholder' => 'Capacity Details']) }}
        {!! $errors->first('capacity_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> 12GB RAM 1TB SSD 2Cores</small>
    </div>
</div>

<!-- TYPE -->
<div class="form-group mb-3">
    <label class="form-label">   Tipo de Servidor</label>
    <div>
        {{ Form::text('type', $addServer->type, ['class' => 'form-control' .
        ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Rackable, Blade, Tower</small>
    </div>
</div>

<!-- RAID -->
<div class="form-group mb-3">
    <label class="form-label">   RAID</label>
    <div>
        {{ Form::text('raid', $addServer->raid, ['class' => 'form-control' .
        ($errors->has('raid') ? ' is-invalid' : ''), 'placeholder' => 'Raid']) }}
        {!! $errors->first('raid', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- MULTIPATH -->
<div class="form-group mb-3">
    <label class="form-label">   Es Multipaso?</label>
    <div>
        <x-toggle name="is_multipath" value="{{ $addServer->is_multipath }}" checked="{{ $addServer->is_multipath ? 'checked' : '' }}" />
        {!! $errors->first('is_multipath', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- BOND -->
<div class="form-group mb-3">
    <label class="form-label">   Es Bond?</label>
    <div>
        <x-toggle name="is_bond" value="{{ $addServer->is_bond }}" checked="{{ $addServer->is_bond ? 'checked' : '' }}" />
        {!! $errors->first('is_bond', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- VIRTUAL -->
<div class="form-group mb-3">
    <label class="form-label">   Es Servidor Virtual?</label>
    <div>
        <x-toggle name="is_virtual" value="{{ $addServer->is_virtual }}" checked="{{ $addServer->is_virtual ? 'checked' : '' }}" />
        {!! $errors->first('is_virtual', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- VIRTUALIZER -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del Virtualizador</label>
    <div>
        {{ Form::text('virtualizer_details', $addServer->virtualizer_details, ['class' => 'form-control' .
        ($errors->has('virtualizer_details') ? ' is-invalid' : ''), 'placeholder' => 'Virtualizer Details']) }}
        {!! $errors->first('virtualizer_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> OpenVZ, QEMU, VMware Workstation Pro</small>
    </div>
</div>

<!-- LOCATION -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles de Ubicación</label>
    <div>
        {{ Form::text('location_details', $addServer->location_details, ['class' => 'form-control' .
        ($errors->has('location_details') ? ' is-invalid' : ''), 'placeholder' => 'Location Details']) }}
        {!! $errors->first('location_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Los Teques Intevep pasillo 2 rack 400</small>
    </div>
</div>

<fieldset class="form-fieldset">


<!-- OS -->
<div class="form-group mb-3">
    <label class="form-label">   Detalles del S.O.</label>
    <div>
        {{ Form::text('os_details', $addServer->os_details, ['class' => 'form-control' .
        ($errors->has('os_details') ? ' is-invalid' : ''), 'placeholder' => 'Os Details']) }}
        {!! $errors->first('os_details', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Linux 5.15.0 x86_64 Ubuntu 22.04 LTS</small>
    </div>
</div>

<!-- ENV -->
<div class="form-group mb-3">
    <label class="form-label">   Entorno</label>
    <div>
        {{ Form::text('enviroment', $addServer->enviroment, ['class' => 'form-control' .
        ($errors->has('enviroment') ? ' is-invalid' : ''), 'placeholder' => 'Enviroment']) }}
        {!! $errors->first('enviroment', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Produccion, Desarrollo, Testing</small>
    </div>
</div>

<!-- STATUS -->
<div class="form-group mb-3">
    <label class="form-label">   Status</label>
    <div>
        {{ Form::text('status', $addServer->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
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