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
//Route::get('todos', 'TodoListController@index');
//Route::get('/todos/{id}', 'TodoListController@show');

Route::get('/db', function ()
{
//    DB::table('todo_list')->insert(
//        array('name' => 'your List')
//    );
    //return
    $results = DB::table('todo_list')->where('name', 'your List')->first();
    return $results->name;
});

Route::resource('todos', 'TodoListController');

/*
 * These are for fun
// */
//Route::get('/hello', function ()
//{
//    return View::make('hello.hello');
//});
//
//Route::get('/hello/', function ()
//{
//    return View::make('hello.index');
//});