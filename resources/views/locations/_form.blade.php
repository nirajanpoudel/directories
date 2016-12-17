 <div class="form-group">
        {{ Form::label('name', null, ['class' => 'control-label']) }}
        {!! Form::text('name',null,['class'=>'form-control']); !!}
        
    </div>

        {!!  Form::submit('Click Me!'); !!}