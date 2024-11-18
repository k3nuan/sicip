
<div class="form-group mb-3">
    <label class="form-label">   Seleccione Servidor</label>
    <div>
        <x-tom-select name="server_id" placeholder="" remote-data="true" item-search-route="storage.server" create="true" max-items="1" class="{{ ($errors->has('server_id') ? ' is-invalid' : '') }}"></x-tom-select>
        {!! $errors->first('server_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Esquema</label>
    <div>
        {{ Form::text('schema', $addBackup->schema, ['class' => 'form-control' .
        ($errors->has('schema') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('schema', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplos:</b> Full, Incremental</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Horarios</label>
    <div>
        {{ Form::text('schedule', $addBackup->schedule, ['class' => 'form-control' .
        ($errors->has('schedule') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('schedule', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint"><b>Ejemplo:</b> Lunes 22:00</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-backups.index') }}" class="btn btn-danger btn-test">
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
