<?php

class TodoListController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $todo_list = TodoList::all();

        return View::make('todos.index')->with('todo_list', $todo_list);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        $list = new TodoList();
//        $list->name = "Another List";
//        $list->save();

        //return "Create another List";
        return View::make('todos.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $title = Input::get('title');
        $list = new TodoList();
        $list->name = $title;
        $list->save();
        return Redirect::route('todos.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $list = TodoList::find($id);

        return View::make('todos.show')->withList($list);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
