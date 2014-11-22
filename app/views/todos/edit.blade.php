@extends('layouts.main')
@section('content')
    <!-- this is the title for my list page Form Input -->
    {{ Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT' )) }}
        @include('todos.partials._form')
    {{ Form::close() }}
@stop