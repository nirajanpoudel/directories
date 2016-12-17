@extends('layouts.app')
@section('content')

    {!! Form::open(array('action' => 'DirectoryController@store','files'=>true)) !!}
    @include('directories._form')
    {!! Form::close() !!}
@stop