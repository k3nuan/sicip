
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('config_env_id') }}</label>
    <div>
        {{ Form::text('config_env_id', $configApp->config_env_id, ['class' => 'form-control' .
        ($errors->has('config_env_id') ? ' is-invalid' : ''), 'placeholder' => 'Config Env Id']) }}
        {!! $errors->first('config_env_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>config_env_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('acronym') }}</label>
    <div>
        {{ Form::text('acronym', $configApp->acronym, ['class' => 'form-control' .
        ($errors->has('acronym') ? ' is-invalid' : ''), 'placeholder' => 'Acronym']) }}
        {!! $errors->first('acronym', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>acronym</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $configApp->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('url') }}</label>
    <div>
        {{ Form::text('url', $configApp->url, ['class' => 'form-control' .
        ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
        {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>url</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $configApp->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ait_custodian') }}</label>
    <div>
        {{ Form::text('ait_custodian', $configApp->ait_custodian, ['class' => 'form-control' .
        ($errors->has('ait_custodian') ? ' is-invalid' : ''), 'placeholder' => 'Ait Custodian']) }}
        {!! $errors->first('ait_custodian', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>ait_custodian</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ait_name') }}</label>
    <div>
        {{ Form::text('ait_name', $configApp->ait_name, ['class' => 'form-control' .
        ($errors->has('ait_name') ? ' is-invalid' : ''), 'placeholder' => 'Ait Name']) }}
        {!! $errors->first('ait_name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>ait_name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('func_custodian') }}</label>
    <div>
        {{ Form::text('func_custodian', $configApp->func_custodian, ['class' => 'form-control' .
        ($errors->has('func_custodian') ? ' is-invalid' : ''), 'placeholder' => 'Func Custodian']) }}
        {!! $errors->first('func_custodian', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>func_custodian</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('func_name') }}</label>
    <div>
        {{ Form::text('func_name', $configApp->func_name, ['class' => 'form-control' .
        ($errors->has('func_name') ? ' is-invalid' : ''), 'placeholder' => 'Func Name']) }}
        {!! $errors->first('func_name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>func_name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('func_telf') }}</label>
    <div>
        {{ Form::text('func_telf', $configApp->func_telf, ['class' => 'form-control' .
        ($errors->has('func_telf') ? ' is-invalid' : ''), 'placeholder' => 'Func Telf']) }}
        {!! $errors->first('func_telf', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configApp <b>func_telf</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
