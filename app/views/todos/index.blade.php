@extends('layouts.main')
@section('content')
    <h2>Show all to do list!</h2>
        @foreach($todo_list as $list)
            <h4>{{ link_to_route('todos.show',$list->name, [$list->id]) }}</h4>
            <ul class="no-bullet button-group">
                <li>
                    {{ link_to_route('todos.edit', 'edit', array($list->id), array('class'=>'tiny button')) }}
                </li>
                <li>
                {{ Form::model($list, array('route' => array('todos.destroy', $list->id), 'method'=> 'delete')) }}
                    {{ Form::button('destroy', array('type'=> 'submit', 'class'=> 'tiny alert button ')) }}
                {{ Form::close() }}
                </li>
            </ul>
        @endforeach
        {{ link_to_route('todos.create', 'Create New List', null, array('class' => 'success button')) }}
@stop