<div class="form-group">
    {!! Form::label($input_name, $label_name); !!}
    <div class="form-control-label">
        @include('backend.includes.switch', ['model' => $model, 'input_name' => $input_name, 'default' => $default])
    </div>
</div>
