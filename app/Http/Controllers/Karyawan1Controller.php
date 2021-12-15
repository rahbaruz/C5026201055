<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    { $karyawan1 = DB::table('karyawan1')->paginate(5);
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }
    public function edit($id)
    {
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();

        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }
    public function update(Request $request)
    {
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/karyawan1');
    }
    public function view($id)
    {
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        return view('karyawan1.view', ['karyawan1' => $karyawan1]);
    }
}
