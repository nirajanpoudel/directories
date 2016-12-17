@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'FacultyController@store')) !!}
    @include('faculties._form')
    {!! Form::close() !!}
@stop