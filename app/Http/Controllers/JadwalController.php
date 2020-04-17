<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = \App\Jadwal::all();
        return view('jadwal.index', [
            'jadwal' => $jadwal
        ]);
    }

    public function tambah(Request $request)
    {
        $input=$request->all();
        \App\Jadwal::insert( [
            'namamatkul' => $input['namamatkul'],
            'waktu' =>$input['waktu'],
            'lab' =>$input['lab']
        ]);
        return redirect('/jadwal');
    }

    public function edit(Request $request)
    {
        $input=$request->all();

        $jadwal = \App\Jadwal::find($input['id']);
        $jadwal->update($input);
        return redirect('/jadwal');
    }

    public function hapus($id)
    {
        $jadwal = \App\Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }

    public function viewtambah()
    {
        return view('jadwal.tambah');
    }

    public function viewEdit($id)
    {
        $jadwal = \App\Jadwal::find($id);
        return view('jadwal.edit', [
            'jadwal' => $jadwal
        ]);
    }
}
