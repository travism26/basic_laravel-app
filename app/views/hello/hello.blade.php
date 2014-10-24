@extends('layouts.main')
@section('content')
    <!-- Username Form Input -->
    <div class="form-group">
        {{ Form::label('username', 'Username:') }}
        {{ Form::text ('username', '', ['class'=> 'form-control', 'placeholder' => 'test']) }}
    </div>
    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password ('password', ['class'=> 'form-control', 'placeholder' => 'password bitch']) }}
    </div>
@stop