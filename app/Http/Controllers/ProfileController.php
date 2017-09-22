<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
  public function index(){
    $names = DB::select("select name from users");
    $email = DB::select("select email from users");
    $joined = DB::select("select created_at from users");
    $profilethreads = DB::select("select * from threads");
    $threadsinfo = [
        ["published" => "Laravel Controller", "body" => "Hvenig býr maður til controller í Laravel?", "anchor" => "https://laravel.com/docs/5.4/controllers"],
        ["published" => "Laravel 5.5", "body" => "Hver er munurinn á Laravel útgáfu 5.4 og 5.5?", "anchor" => "" ],
      ];
    return view('profile.profile', compact("profilethreads", "names", "joined", "threadsinfo", "email"));
  }
}
