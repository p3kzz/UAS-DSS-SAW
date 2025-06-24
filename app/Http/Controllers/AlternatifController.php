<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kategori;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class AlternatifController extends Controller
{
    public function index()
    {
        // $kategori = Kategori::findOrFail($id);
        // $alternatifs = Alternatif::with('kategori')->where('kategori_id', $id)->get();
        $kriterias = Kriteria::all();

        return view('alternatif.index', compact('kriterias'));
    }

    public function byKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $alternatifs = Alternatif::with('kategori')->where('kategori_id', $id)->get();
        $kriterias = Kriteria::all();

        return view('alternatif.index', compact('alternatifs', 'kategori', 'kriterias'));
    }

    public function create($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('alternatif.create', compact('kategori'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_alternatif' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kualitas' => 'required|integer',
            'kecepatan_pengiriman' => 'required|integer',
            'konsistensi_pasokan' => 'required|integer',
            'kemudahan_komunikasi' => 'required|integer',
            'kategori_id' => 'required|exists:kategoris,id',
            'kriteria_id' => 'required|exists:kriterias,id',
        ]);

        Alternatif::create([
            'nama_alternatif' => $request->nama_alternatif,
            'harga' => $request->harga,
            'kualitas' => $request->kualitas,
            'kecepatan_pengiriman' => $request->kecepatan_pengiriman,
            'konsistensi_pasokan' => $request->konsistensi_pasokan,
            'kemudahan_komunikasi' => $request->kemudahan_komunikasi,
            'kategori_id' => $request->kategori_id,
            'kriteria_id' => $request->kriteria_id,
        ]);
        return redirect()->route('alternatif.kategori', $request->kategori_id)
            ->with('success', 'Alternatif berhasil ditambahkan.');
    }
}
