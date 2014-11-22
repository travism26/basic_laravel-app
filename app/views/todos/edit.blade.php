@extends('layouts.main')
@section('content')
    <!-- this is the title for my list page Form Input -->
    {{ Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT' )) }}
    {{ Form::label('name', 'Title:') }}
    {{ Form::text ('name') }}
    {{ Form::submit('Update', array('class' => 'button')) }}
    {{ $errors->first('name', '<small class="error">:message</small>') }}
    {{ Form::close() }}
@endsection