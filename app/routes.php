<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
 * / home
 * /todos - all lists
 * /todos - show
 * /todos/1/edit - edit and update
 * /todos/create - create a new todos
 * */
Route::get('/', 'TodoListController@index');

Route::get('/db', function ()
{
    $results = DB::table('todo_list')->where('name', 'your List')->first();
    return $results->name;
});

Route::resource('todos', 'TodoListController');

//Event::listen('illuminate.query', function($query){
//    var_dump($query);
//});