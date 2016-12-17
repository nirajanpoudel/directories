@extends('layouts.app')
@section('content')
    <div class="container">
    <a href="{{url('levels/create')}}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Action</th>
            </tr>
                @foreach($levels as $level)
                    <tr>
                        <td>{{$level->name}}</td>
                        <td>{{$level->symbol}}</td>
                        <td>
                            {!! link_to('levels/'.$level->id.'/edit', 'Edit', $attributes = ['class'=>'btn btn-success'], $secure = null); !!}
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@stop