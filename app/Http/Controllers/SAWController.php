<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class SAWController extends Controller
{
    public function index(){
        return view('saw.index');
    }

    public function saw(){
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();
        return view('saw.saw', compact('alternatifs', 'kriterias'));
    }
}
