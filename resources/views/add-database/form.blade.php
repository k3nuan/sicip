
<div class="form-group mb-3">
    <label class="form-label">   Servidor</label>
    <div>
        <x-tom-select name="server_id" placeholder="" remote-data="true" item-search-route="storage.server" create="true" max-items="1" class="{{ ($errors->has('server_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('server_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Aplicación</label>
    <div>
        <x-tom-select name="app_id" placeholder="" remote-data="true" item-search-route="app.name" create="true" max-items="1" class="{{ ($errors->has('app_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('app_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Detalles del Manejador</label>
    <div>
        {{ Form::text('management_details', $addDatabase->management_details, ['class' => 'form-control' .
        ($errors->has('management_details') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('management_details', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Nombre Instancia</label>
    <div>
        {{ Form::text('instance_name', $addDatabase->instance_name, ['class' => 'form-control' .
        ($errors->has('instance_name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('instance_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-databases.index') }}" class="btn btn-danger btn-test">
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