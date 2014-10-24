@extends('layouts.main')
@section('content')
    <h2>Show all to do list!</h2>
    <ul>
        @foreach($todo_list as $list)
            <li>{{{ $list->name }}}</li>
        @endforeach
    </ul>
@stop