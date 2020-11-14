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

  public function tambah()
  {
    return view('tambah');
  }

  public function store(Request $request)
  {
    DB::table('mobil')->insert([
      'model' => $request->model,
      'merk' => $request->merk,
      'harga' => $request->harga,
      'tipe_bodi' => $request->tipe_bodi,
      'transmisi' => $request->transmisi,
      'tipe_bahan_bakar' => $request->tipe_bahan_bakar,
    ]);
    return redirect('/mobil');
  }

  public function edit($id)
  {
    $mobil = DB::table('mobil')->where('mobil_id', $id)->get();
    return view('edit', ['mobil' => $mobil]);
  }

  public function update(Request $request)
  {
    DB::table('mobil')->where('mobil_id', $request->id)->update([
      'model' => $request->model,
      'merk' => $request->merk,
      'harga' => $request->harga,
      'tipe_bodi' => $request->tipe_bodi,
      'transmisi' => $request->transmisi,
      'tipe_bahan_bakar' => $request->tipe_bahan_bakar,
    ]);
    return redirect('/mobil');
  }

  public function hapus($id)
  {
    DB::table('mobil')->where('mobil_id', $id)->delete();
    return redirect('/mobil');
  }
}
