 <div class="form-group">
        {{ Form::label('name', null, ['class' => 'control-label']) }}
        {!! Form::text('name',null,['class'=>'form-control']); !!}
        

    </div>
    <div class="form-group">
        {{ Form::label('address', null, ['class' => 'control-label']) }}
        {!! Form::text('address',null,['class'=>'form-control']); !!}
        
        
    </div>
    <div class="form-group">
        {{ Form::label('lat', null, ['class' => 'control-label']) }}
        {!! Form::text('lat',null,['class'=>'form-control']); !!}
    </div>
    <div class="form-group">
    i
        {{ Form::label('lon', null, ['class' => 'control-label']) }}
        {!! Form::text('lon',null,['class'=>'form-control']); !!}
    </div>
     <div class="form-group">
     @if(isset($directory))
     	<img src="{{ asset('uploads/'.$directory->logo) }}" class="img-rounded" alt="{{$directory->name}}" width="100" height="100">
     @endif
        {{ Form::label('lon', null, ['class' => 'control-label']) }}
        {!! Form::file('logo',null,['class'=>'form-control']); !!}
    </div>

    <div class="form-group">
        {{ Form::label('category_id', null, ['class' => 'control-label']) }}
       
        {!!  Form::select('category_id',$categories, null,['class'=>'form-control'] ); !!}
    </div>
      <div class="form-group">
        {{ Form::label('location_id', null, ['class' => 'control-label']) }}
        {!!  Form::select('location_id',$locations, null,['class'=>'form-control'] ); !!}
    </div>
<div class="form-group">
        {{ Form::label('email', null, ['class' => 'control-label']) }}
        {!! Form::text('email',null,['class'=>'form-control']); !!}
</div>
<div class="form-group">
        {{ Form::label('website', null, ['class' => 'control-label']) }}
        {!! Form::text('website',null,['class'=>'form-control']); !!}
</div>
<div class="form-group">

        {{ Form::label('phone Number', null, ['class' => 'control-label']) }}
        <span>(Helper text..)</span>
        {!! Form::textarea('phone',null,['class'=>'form-control']); !!}
</div>


        {!!  Form::submit('Click Me!'); !!}