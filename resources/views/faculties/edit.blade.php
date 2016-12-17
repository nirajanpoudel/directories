@extends('layouts.app')
@section('content')
    {!! Form::model($faculty,array('route' => ['faculties.update',$faculty->id])) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('faculties._form')
    {!! Form::close() !!}
@stop