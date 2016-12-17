@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'LocationController@store')) !!}
    @include('locations._form')
    {!! Form::close() !!}
@stop