<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
  public function index(){
    $names = DB::select("select name from users");
    $joined = DB::select("select created_at from users");
    $profilethreads = DB::select("select * from threads");
    $threadsinfo = [
        ["nafn" => "Aleksei Voronin"],
        ["published" => "Laravel Controller", "anchor" => ""],
        ["published" => "Laravel 5.5", "anchor" => "" ],
        ["body" => "Hvernig býr maður til controller í Laravel?"],
        ["body" => "Hver er munurinn á Laravel útgáfu 5.4 og 5.5?"]
      ];
    return view('profile.profile', compact("profilethreads", "names", "joined", "threadsinfo"));
  }
}
