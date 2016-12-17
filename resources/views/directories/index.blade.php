@extends('layouts.app')
@section('content')
     <a href="{{url('directories/create')}}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Logo</th>

                <th>Action</th>
            </tr>
                 @foreach($directories as $location)
                    <tr>
                        <td>{{$location->name}}</td>
                        <td><img src="{{asset('uploads/'.$location->logo)}}" width="50" height="50" alt=""></td>
                        <td>
                            {!! link_to('directories/'.$location->id.'/edit', 'Edit', $attributes = ['class'=>'btn btn-success'], $secure = null); !!}
                        </td>
                    </tr>
                @endforeach
@stop