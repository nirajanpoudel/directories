@extends('layouts.app')
@section('content')
    {!! Form::model($directory,array('route' => ['directories.update',$directory->id],'files'=>true)) !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @include('directories._form',['directory'=>$directory])
    {!! Form::close() !!}
@stop