@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'QuestionController@store')) !!}
    @include('questions._form')
    {!! Form::close() !!}
@stop