<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KertashvsController extends Controller
{
    public function index()
    { $kertashvs = DB::table('kertashvs')->paginate(5);
        return view('kertashvs.index', ['kertashvs' => $kertashvs]);
    }
    public function cari(Request $request)
    { $cari = $request->cari;
      $kertashvs = DB::table('kertashvs')
      ->where('merkkertashvs','like',"%" .$cari . "%")
      ->paginate(3);
      return view('kertashvs.index', ['kertashvs' => $kertashvs]);
    }

    public function tambah()
    {
        return view('kertashvs.tambah');
    }
    public function store(Request $request)
    {
        DB::table('kertashvs')->insert([
            'kodekertashvs' => $request->kode,
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kertashvs');
    }
    public function edit($kodekertashvs)
    {
    $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$kodekertashvs)->get();
    return view('kertashvs.edit', ['kertashvs'=> $kertashvs]);
}
    public function detail($kodekertashvs)
    {
        $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$kodekertashvs)->get();
        return view('kertashvs.detail', ['kertashvs' => $kertashvs]);
    }
    public function update(Request $request)
    {
    DB::table('kertashvs')->where('kodekertashvs',$request->kodekertashvs)->update([
        'kodekertashvs' => $request->kode,
        'merkkertashvs' => $request->merk,
        'stockkertashvs' => $request->stock,
        'tersedia' => $request->tersedia
    ]);
    return redirect('/kertashvs');
}
    public function hapus($kodekertashvs)
    {
        DB::table('kertashvs')->where('kodekertashvs',$kodekertashvs)->delete();
        return redirect('/kertashvs');
    }
}



