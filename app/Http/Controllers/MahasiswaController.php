<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mhs.index', compact('mahasiswa'));
    }
    public function add()
    {
        return view ('mhs.add');
    }
    public function store(Request $req)
    {
        Mahasiswa::create($req->all());
        return redirect('/Mahasiswa');
    }

     public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view ('mhs.edit', compact('mhs'));
    }
    public function update(Request $req, $id)
    {
        Mahasiswa::find($id)->update($req->all());
        return redirect('/Mahasiswa');
    }

    public function delete($id)
    {

        Mahasiswa::find($id)->delete();
        return redirect('/Mahasiswa');
    }

    public function cetak()
    {
        $mahasiswa = Mahasiswa::get();
        $pdf = Pdf::loadview('mhs.cetak', compact ('mahasiswa'));
        return $pdf->stream('mahasiswa.pdf');
    }
}
