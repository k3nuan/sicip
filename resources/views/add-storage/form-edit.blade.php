
<div class="form-group mb-3">
    <label class="form-label">   Servidor</label>
    <div>
        {{ Form::text('server_id', $addStorage->server_id, ['class' => 'form-control' .
        ($errors->has('server_id') ? ' is-invalid' : ''), 'disabled' => 'disabled']) }}
        {!! $errors->first('server_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">addStorage <b>server_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Caja del Servidor</label>
    <div>
        {{ Form::text('box', $addStorage->box, ['class' => 'form-control' .
        ($errors->has('box') ? ' is-invalid' : ''), 'placeholder' => 'Box']) }}
        {!! $errors->first('box', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">addStorage <b>box</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   Tipo</label>
    <div>
        {{ Form::text('type', $addStorage->type, ['class' => 'form-control' .
        ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">addStorage <b>type</b> instruction.</small>
    </div>
</div>
<!-- SIZE -->
<div class="form-group mb-3">
    <label class="form-label">   Tamaño GB</label>
    <div>
        {{ Form::text('size_gb', $addStorage->size_gb, ['class' => 'form-control' .
        ($errors->has('size_gb') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('size_gb', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- VOL -->
<div class="form-group mb-3">
    <label class="form-label">   VOL ID</label>
    <div>
        {{ Form::text('vol_id', $addStorage->vol_id, ['class' => 'form-control' .
        ($errors->has('vol_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('vol_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<!-- LUN -->
<div class="form-group mb-3">
    <label class="form-label">   LUN ID</label>
    <div>
        {{ Form::text('lun_id', $addStorage->lun_id, ['class' => 'form-control' .
        ($errors->has('lun_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
        {!! $errors->first('lun_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('add-storages.index') }}" class="btn btn-danger btn-test">
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
