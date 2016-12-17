@extends('layouts.app')
@section('content')
    {!! Form::model($subject,array('route' => ['subjects.update',$subject->id])) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('subjects._form')
    {!! Form::close() !!}
@stop