<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index(){
        return view('todo.index');
    }
    public function add(){
        return view('todo.add');
    }
    public function delete(){
        return view('todo.delete');
    }
    public function description(){
        return view('todo.description');
    }
}
