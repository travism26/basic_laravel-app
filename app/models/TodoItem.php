<?php

class TodoItem extends Eloquent {

    //protected $fillable = [];

    public function todoList()
    {
        return $this->belongsTo('TodoList');
    }

}