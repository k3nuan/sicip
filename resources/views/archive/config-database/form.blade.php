
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('management_version') }}</label>
    <div>
        {{ Form::text('management_version', $configDatabase->management_version, ['class' => 'form-control' .
        ($errors->has('management_version') ? ' is-invalid' : ''), 'placeholder' => 'Management Version']) }}
        {!! $errors->first('management_version', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configDatabase <b>management_version</b> instruction.</small>
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
