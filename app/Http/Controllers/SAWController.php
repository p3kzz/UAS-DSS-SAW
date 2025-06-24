<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kategori;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class SAWController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('saw.index', compact('kategori'));
    }

    public function saw($id)
    {

        $alternatifs = Alternatif::where('kategori_id', $id)->get();
        $kriterias = Kriteria::all();

        $nilaiMax = [];
        $nilaiMin = [];

        foreach ($kriterias as $kriteria) {
            $nilaiMax[$kriteria->id] = Alternatif::max($kriteria->nama_kriteria);
            $nilaiMin[$kriteria->id] = Alternatif::min($kriteria->nama_kriteria);
        }

        // 2. Normalisasi dan hitung nilai preferensi
        $normalisasi = [];
        $preferensi = [];

        foreach ($alternatifs as $alternatif) {
            $total = 0;
            foreach ($kriterias as $kriteria) {
                $nilai = $alternatif->{$kriteria->nama_kriteria};
                $bobot = $kriteria->bobot;

                if ($kriteria->tipe === 'benefit') {
                    $nilaiNormal = $nilai / $nilaiMax[$kriteria->id];
                } else {
                    $nilaiNormal = $nilaiMin[$kriteria->id] / $nilai;
                }

                $normalisasi[$alternatif->id][$kriteria->id] = $nilaiNormal;
                $total += $nilaiNormal * $bobot;
            }

            $preferensi[$alternatif->id] = $total;
        }

        // 3. Kirim ke view
        return view('saw.saw', compact('alternatifs', 'kriterias', 'normalisasi', 'preferensi'));
    }
}
