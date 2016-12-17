@extends('layouts.app')
@section('content')
    {!! Form::model($category,array('route' => ['categories.update',$category->id])) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('locations._form')
    {!! Form::close() !!}
@stop