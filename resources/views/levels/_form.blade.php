 <div class="form-group">
        {{ Form::label('name', null, ['class' => 'control-label']) }}
        {!! Form::text('name',null,['class'=>'form-control']); !!}
    </div>
        <div class="form-group">
         {{ Form::label('symbol', null, ['class' => 'control-label']) }}
            {!! Form::text('symbol',null,['class'=>'form-control']); !!}
        </div>
        {!!  Form::submit('Click Me!'); !!}