@extends('layouts.main')
@section('content')
    <div class="large-12 columns">
        <h1>{{{ $list->name }}}</h1>
        <p>{{ link_to_route('todos.index', 'Back') }}</p>
    </div>
@stop