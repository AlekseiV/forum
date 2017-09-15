<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
  public function greeting(){
    	$name = "Aleksei";
    	return view('messages.hello' , compact("name"));
  }

  public function greetindex($id){
    $greetings = ["Velkominn á síðuna", "Bonjour", "Siema", "Здра́вствуйте", "Welcome on the site"];
    return view('messages.greeting', ["greeting" => $greetings[$id]]);
  }
}
