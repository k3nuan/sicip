
<div class="form-group mb-3">
    <label class="form-label">   Servidor</label>
    <div>
        <x-tom-select name="server_id" placeholder="" remote-data="true" item-search-route="storage.server" create="true" max-items="1" class="{{ ($errors->has('server_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('server_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Dirección IP</label>
    <div>
        <x-tom-select name="ip_address" placeholder="" remote-data="true" item-search-route="connection.ip" create="true" max-items="1" class="{{ ($errors->has('ip_address') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('ip_address', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> 192.168.0.1</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Protocolo</label>
    <div>
        <x-tom-select name="type" placeholder="" remote-data="true" item-search-route="connection.protocol" create="true" max-items="1" class="{{ ($errors->has('type') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> SSH, SFTP, HTTP.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Usuario</label>
    <div>
        <x-tom-select name="user" placeholder="" remote-data="true" item-search-route="connection.user" create="true" max-items="1" class="{{ ($errors->has('user') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Contraseña</label>
    <div>
        {{ Form::text('password', $addConnection->password, ['class' => 'form-control' .
        ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Asociar Aplicacion</label>
    <div>
        <x-tom-select name="app_id" placeholder="" remote-data="true" item-search-route="app.name" create="true" max-items="1" class="{{ ($errors->has('app_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('app_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Asociar Base de Datos</label>
    <div>
        <x-tom-select name="database_id" placeholder="" remote-data="true" item-search-route="database.instance" create="true" max-items="1" class="{{ ($errors->has('database_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('database_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-connections.index') }}" class="btn btn-danger btn-test">
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