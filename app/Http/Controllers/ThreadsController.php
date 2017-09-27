<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadsController extends Controller
{
    public function index(){
      $threads = DB::table("threads")->get();
      return view('threads.index', compact("threads"));
    }

    public function create(){
      return view('threads.create');
    }

    public function show($id){
      $thread = DB::table("threads")->where("id", $id)->first();
      return view('threads.show', compact("thread"));
    }

    public function store(){
      dd("store method");
    }
}
