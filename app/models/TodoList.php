<?php

//namespace ;

class TodoList extends Eloquent {

    //protected $fillable = [];
    public function listItems()
    {
        return $this->hasMany('TodoItem');
    }

}