<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;

class ThreadsController extends Controller
{
    public function index(Request $request){
      $threads = Thread::all();
      //$threads = DB::table("threads")->get(); Alveg það sama og fyrir ofan.
      return view('threads.index', compact("threads"));
    }

    public function create(){
      return view('threads.create');
    }

    public function show($id){
      $thread = DB::table("threads")->where("id", $id)->first();
      return view('threads.show', compact("thread"));
    }

    public function store(Request $request){
      $thread = new Thread;
      $thread->title = $request->title;
      $thread->message = $request->message;
      $thread->eigandi = 1;
      $thread->save();

      return redirect("/threads");
    }

}
