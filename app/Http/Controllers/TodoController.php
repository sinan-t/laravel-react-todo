<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

  public function getAll()
  {
    $todos = Todo::orderBy('created_at', 'desc')
                  ->get();

    return $todos->toJson();
  }

  public function getById($id)
  {
    $todo = Todo::find($id);

    return $todo->toJson();
  }

  public function add(Request $request)
  {
    $validatedData = $request->validate(['text' => 'required']);

    $todo = Todo::create([
      'text' => $validatedData['text'],
    ]);

    return $todo->toJson();
  }

  public function changeStatus(Todo $todo, Request $request)
  {
    $validatedData = $request->validate(['status' => 'required']);

    $todo->status = $validatedData['status'] == 'Done'?'Done':'New';
    $todo->update();

    return response()->json('Todo updated!');
  }

  public function removeById(Todo $todo)
  {
    //
    $todo->delete();
  }

}
