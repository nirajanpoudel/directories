@extends('layouts.app')
@section('content')
    {!! Form::open(array('action' => 'CategoryController@store')) !!}
    @include('categorys._form')
    {!! Form::close() !!}
@stop