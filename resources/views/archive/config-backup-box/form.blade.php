
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $configBackupBox->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configBackupBox <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('storage_type') }}</label>
    <div>
        {{ Form::text('storage_type', $configBackupBox->storage_type, ['class' => 'form-control' .
        ($errors->has('storage_type') ? ' is-invalid' : ''), 'placeholder' => 'Storage Type']) }}
        {!! $errors->first('storage_type', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configBackupBox <b>storage_type</b> instruction.</small>
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
