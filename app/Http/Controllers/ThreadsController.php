<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadsController extends Controller
{
    public function index(){
      $threads = DB::select("select * from threads");
      return view('threads.index', compact("threads"));
    }

    public function create(){
      $tasks = [
      ["title" => "Klara A", "complete" => true, "anchor" => "http://A.is"],
      ["title" => "Klara B", "complete" => false, "anchor" => "http://B.is"],
      ["title" => "Klara C", "complete" => false, "anchor" => "http://C.is"],
      ["title" => "Klara D", "complete" => true, "anchor" => "http://D.is"],
      ["title" => "Klara E", "complete" => true, "anchor" => "http://E.is"],
    ];
      return view('threads.create', compact("tasks"));
    }

    public function show($id){
      $thread = DB::select("select * from threads where id=?", [$id]);
      return view('threads.show', compact("thread"));
    }
}
