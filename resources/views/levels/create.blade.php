@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'AcademicLevelController@store')) !!}
    @include('levels._form')
    {!! Form::close() !!}
@stop