@extends('layouts.app')
@section('content')
     <a href="{{url('locations/create')}}">Create</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>

                <th>Action</th>
            </tr>
                 @foreach($locations as $location)
                    <tr>
                        <td>{{$location->name}}</td>
                        <td>
                            {!! link_to('locations/'.$location->id.'/edit', 'Edit', $attributes = ['class'=>'btn btn-success'], $secure = null); !!}
                        </td>
                    </tr>
                @endforeach
@stop