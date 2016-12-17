 <div class="form-group">
        {{ Form::label('Level', null, ['class' => 'control-label']) }}
       {!!  Form::select('subject_id',$subjects, null,['class'=>'form-control'] ); !!}
</div>
     <div class="form-group">
    {!! Form::file('image') !!}
     </div>
         {!!  Form::submit('Click Me!'); !!}