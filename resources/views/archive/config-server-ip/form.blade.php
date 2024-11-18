
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('address') }}</label>
    <div>
        {{ Form::text('address', $configServerIp->address, ['class' => 'form-control' .
        ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
        {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">configServerIp <b>address</b> instruction.</small>
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
