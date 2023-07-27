<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    public function index()
    {

        //ELOQUENT
        $penghuni = Penghuni::all();
        return view('penghuni.index', ['data'=>$penghuni]);
    }

    public function tambah()
    {
        return view('penghuni.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'nomor_kamar' => $request->nomor_kamar,
            'nama_penghuni' => $request->nama_penghuni,
            'kategori_kamar' => $request->kategori_kamar,
            'tanggal_penempatan'=> $request->tanggal_penempatan,
        ];

        Penghuni::create($data);

        return redirect()->route('penghuni');
    }

    public function edit($id)
    {
        $penghuni = Penghuni::where('id', $id)->first();

        return view('penghuni.form',['penghuni'=>$penghuni]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'nomor_kamar' => $request->nomor_kamar,
            'nama_penghuni' => $request->nama_penghuni,
            'kategori_kamar' => $request->kategori_kamar,
            'tanggal_penempatan'=> $request->tanggal_penempatan,
        ];

        Penghuni::find($id)->update($data);

        return redirect()->route('penghuni');
    }

    public function hapus ($id)
    {
        Penghuni::find($id)->delete();

        return redirect()->route('penghuni');

    }
}
