@extends('layouts.main')
@section('content')
    <!-- this is the title for my list page Form Input -->
    {{ Form::open( array('route' => 'todos.store' )) }}
    {{ Form::label('title', 'Title:') }}
    {{ Form::text ('title', '', ['class'=> 'form-control', 'placeholder' => 'hello']) }}
    {{ Form::submit('Submit', array('class' => 'button')) }}
    {{ $errors->first('title', '<small class="error">:message</small>') }}
    {{ Form::close() }}
@stop