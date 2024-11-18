
<div class="form-group mb-3">
    <label class="form-label">   Servidor</label>
    <div>
        {{ Form::text('server_id', $addApp->server_id, ['class' => 'form-control' .
        ($errors->has('server_id') ? ' is-invalid' : ''), 'disabled' => 'disabled']) }}
        {!! $errors->first('server_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Acronimo</label>
    <div>
        {{ Form::text('acronym', $addApp->acronym, ['class' => 'form-control' .
        ($errors->has('acronym') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('acronym', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Nombre</label>
    <div>
        {{ Form::text('name', $addApp->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Descripcion</label>
    <div>
        {{ Form::text('description', $addApp->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   URL</label>
    <div>
        {{ Form::text('url', $addApp->url, ['class' => 'form-control' .
        ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Indicador AIT</label>
    <div>
        {{ Form::text('ait_user', $addApp->ait_user, ['class' => 'form-control' .
        ($errors->has('ait_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('ait_user', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Nombre Usuario AIT</label>
    <div>
        {{ Form::text('ait_name', $addApp->ait_name, ['class' => 'form-control' .
        ($errors->has('ait_name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('ait_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Indicador Funcional</label>
    <div>
        {{ Form::text('func_user', $addApp->func_user, ['class' => 'form-control' .
        ($errors->has('func_user') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('func_user', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Nombre Usuario Funcional</label>
    <div>
        {{ Form::text('func_name', $addApp->func_name, ['class' => 'form-control' .
        ($errors->has('func_name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('func_name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Telefono Usuario Funcional</label>
    <div>
        {{ Form::text('func_telf', $addApp->func_telf, ['class' => 'form-control' .
        ($errors->has('func_telf') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('func_telf', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-apps.index') }}" class="btn btn-danger btn-test">
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

