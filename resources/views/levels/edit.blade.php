@extends('layouts.app')
@section('content')
    {!! Form::model($level,array('route' => ['levels.update',$level->id])) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('levels._form')
    {!! Form::close() !!}
@stop