<?php

class TodoListController extends \BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put')));
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
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $list = TodoList::findOrFail($id);
        $items = $list->listItems()->get();
        return View::make('todos.show')
            ->withList($list)
            ->withItems($items);
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
            return Redirect::route('todos.edit', $id)->withErrors($validator)->withInput();
        }
        $name = Input::get('name');
        $list = TodoList::findOrFail($id);
        $list->name = $name;
        $list->update();

        return Redirect::route('todos.index')->withMessage('List was updated');
    }

    /**
     * Store a newly created resource in storage.`
     *
     * @return Response
     */
    public function store()
    {
        $validator = $this->todovalidation();

        if ($validator->fails())
        {
            //$messages = $validator->messages();
            return Redirect::route('todos.create')->withErrors($validator)->withInput();
        }
        $title = Input::get('name');
        $list = new TodoList();
        $list->name = $title;
        $list->save();

        return Redirect::route('todos.index')->withMessage('List was created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

        $todoList = TodoList::findOrFail($id)->delete();

        return Redirect::route('todos.index')->withMessage('Item was Deleted!');
    }

    /**
     * @return \Illuminate\Validation\Validator
     */
    private function todovalidation()
    {
        //define the rules
        $rules = array(
            'name' => array('required', 'unique:todo_lists')
        );
        //pass input to validators
        $validator = Validator::make(Input::all(), $rules);

        return $validator;
    }


}
