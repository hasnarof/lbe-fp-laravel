<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{

  public function index()
  {
    $mobil = DB::table('mobil')->get();

    return view('index', ['mobil' => $mobil]);
  }
}
