@extends('layouts.main')
@section('content')
    <!-- this is the title for my list page Form Input -->
    {{ Form::open( array('route' => 'todos.store' )) }}
        @include('todos.partials._form')
    {{ Form::close() }}
@stop