@extends('layouts.app')
@section('content')
    {!! Form::model($location,array('route' => ['locations.update',$location->id])) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('locations._form')
    {!! Form::close() !!}
@stop