<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
  public function greeting()
  {
    	$name = "Aleksei";
    	return view('messages.hello' , compact("name"));
  }
}
