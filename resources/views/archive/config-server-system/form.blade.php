
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('type') }}</label>
    <div>
        {{ Form::text('type', $configServerSystem->type, ['class' => 'form-control' .
        ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
        {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configServerSystem <b>type</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $configServerSystem->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configServerSystem <b>name</b> instruction.</small>
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
