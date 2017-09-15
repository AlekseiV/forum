<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){
      $threads = [
        ["title" => "Titill A", "body" => "Lorem Ipsum dolor set"],
        ["title" => "Titill B", "body" => "Þetta er B"],
        ["title" => "Titill c", "body" => "Þetta er c"]
      ];

      return view('threads.index', compact("threads"));
    }

    public function create(){
      return view('threads.create');
    }

    public function show($id){
      return view('threads.show');
    }
}