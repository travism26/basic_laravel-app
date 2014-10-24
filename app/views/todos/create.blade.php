@extends('layouts.main')
@section('content')
    <!-- this is the title for my list page Form Input -->
    <div class="form-group">
        {{ Form::open( array('route' => 'todos.store' )) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text ('title', '', ['class'=> 'form-control', 'placeholder' => 'hello']) }}
        {{ Form::submit('Submit', array('class' => 'button')) }}
        {{ Form::close() }}
    </div>
@stop