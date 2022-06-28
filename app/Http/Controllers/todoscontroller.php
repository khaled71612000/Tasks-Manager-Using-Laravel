<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class todoscontroller extends Controller
{
    public function index () {
        // models allow u to quey for tables The Eloquent ORM which is in illumantiae
        // can be dfeind like class User extends Model {}
        // get all todos in todos table and save them there but first use class
        // pass  data $ or all to name of the key then pass to view
        return view('todos.about')->with('todos', Todo::all());
    }
    // the id is ww.adads/123
    public function show (Todo $todo) {
        // kill app and dump files like die and print error
        // dd($todoId);
        return view('todos.show')->with('todo',$todo);
       }

    public function create () {
        return view('todos.create');
       }
    public function store () {
        // comming from controller
        // if its requiuied dont do unless
        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description' =>'required'
        ]);
        // get all data from request
        $data = request()->all();
        // get new instant of model and make new property values
        $todo = new Todo();
        $todo->name= $data['name'];
        $todo->description= $data['description'];
        $todo->completed= false;
        // save data query
        $todo->save();

        session()->flash('success','todo created');

        return redirect('/todos');
       }

       public function edit (Todo $todo) {
           return view('todos.edit')->with('todo',$todo);
       }
       public function update (Todo $todo) {
        //    always valdiate 
        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description' =>'required'
        ]);
        $data = request()->all();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->save();
        session()->flash('success','todo updated');

        return redirect('/todos');
       }
       public function destroy (Todo $todo) {
           $todo->delete();
           session()->flash('success','todo deleted');
           return redirect('/todos');
        }
       public function complete (Todo $todo) {
           $todo->completed= true;
           $todo->save();
           session()->flash('success','Finished');
           return redirect('/todos');
        }
}
