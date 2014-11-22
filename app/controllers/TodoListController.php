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
        //define the rules
        $rules = array(
            'title' => array('required', 'unique:todo_lists,name')
        );
        //pass input to validators
        $validator = Validator::make(Input::all(), $rules);
        //test if input is valid

        if ($validator->fails())
        {
            //$messages = $validator->messages();
            return Redirect::route('todos.create')->withErrors($validator)->withInput();
        }
        $title = Input::get('title');
        $list = new TodoList();
        $list->name = $title;
        $list->save();

        return Redirect::route('todos.index')->withMessage('List was created Successfully');
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
        $list = TodoList::findOrFail($id);
        return View::make('todos.edit')->withList($list);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //define the rules
        $rules = array(
            'name' => array('required', 'unique:todo_lists')
        );
        //pass input to validators
        $validator = Validator::make(Input::all(), $rules);

        //test if input is valid
        if ($validator->fails())
        {
            return Redirect::route('todos.edit')->withErrors($validator)->withInput();
        }
        $name = Input::get('name');
        $list = TodoList::findOrFail($id);
        $list->name = $name;
        $list->update();
        return Redirect::route('todos.index')->withMessage('List was updated Successfully');
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
