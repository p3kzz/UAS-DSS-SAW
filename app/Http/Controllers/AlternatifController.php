<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class AlternatifController extends Controller
{
    public function index(){
        $kriterias = Kriteria::all();
       return view('alternatif.index', compact('kriterias'));
    }

    public function create(){
        return view('alternatif.create');
    }
}
