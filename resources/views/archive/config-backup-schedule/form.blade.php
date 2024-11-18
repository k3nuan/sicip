
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('day') }}</label>
    <div>
        {{ Form::text('day', $configBackupSchedule->day, ['class' => 'form-control' .
        ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Day']) }}
        {!! $errors->first('day', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configBackupSchedule <b>day</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hour') }}</label>
    <div>
        {{ Form::text('hour', $configBackupSchedule->hour, ['class' => 'form-control' .
        ($errors->has('hour') ? ' is-invalid' : ''), 'placeholder' => 'Hour']) }}
        {!! $errors->first('hour', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configBackupSchedule <b>hour</b> instruction.</small>
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
