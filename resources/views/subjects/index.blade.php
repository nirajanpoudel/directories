@extends('layouts.app')
@section('content')
     <a href="{{url('subjects/create')}}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Symbol</th>
                <th>Action</th>
            </tr>
                 @foreach($subjects as $subject)
                    <tr>
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->symbol}}</td>
                        <td>
                            {!! link_to('subjects/'.$subject->id.'/edit', 'Edit', $attributes = ['class'=>'btn btn-success'], $secure = null); !!}
                        </td>
                    </tr>
                @endforeach
@stop