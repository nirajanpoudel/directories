@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'SubjectController@store')) !!}
    @include('subjects._form')
    {!! Form::close() !!}
@stop