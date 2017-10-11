<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function index(Request $request){
      $threads = Thread::latest()->get();
      // $names = DB::select("select name,eigandi from users");
      return view('threads.index', compact("threads", "names"));
    }

    public function create(){
      return view('threads.create');
    }

    public function show($id){
      $thread = DB::table("threads")->where("id", $id)->first();
      // $eigandi = DB::table("users")->where("name", $thread->)->get();
      dd("$eigandi");
      return view('threads.show', compact("thread"));
    }

    public function store(Request $request){
      $thread = new Thread;
      $thread->title = $request->title;
      $thread->message = $request->message;
      $thread->eigandi = Auth::id();

      $validator = Validator::make($request->all(), [
        'title' => 'required|unique:threads|max:40',
        'message' => 'required|min:20',
      ]);

      if($validator->fails()){
        return redirect("/threads/create")
          ->withInput()
          ->withErrors($validator);
      }

      $thread->save();
      return redirect("/threads");
    }

}
