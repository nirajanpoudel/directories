@extends('layouts.app')
@section('content')
     <a href="{{url('faculties/create')}}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Action</th>
            </tr>
                @foreach($faculties as $faculty)
                    <tr>
                        <td>{{$faculty->name}}</td>
                        <td>{{$faculty->symbol}}</td>
                        <td>
                            {!! link_to('faculties/'.$faculty->id.'/edit', 'Edit', $attributes = ['class'=>'btn btn-success'], $secure = null); !!}
                        </td>
                    </tr>
                @endforeach
@stop