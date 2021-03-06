<label class="c-switch c-switch-success c-switch-lg">
    {!! Form::checkbox($input_name, true, $default, [
        'data-id'=>$model->id,
        'class' => 'status-input c-switch-input',
        'data-toggle'=>'toggle',
        'data-onstyle' => 'success',
        'data-route' => $route,
        ]) !!}
    <span class="c-switch-slider"></span>
</label>
