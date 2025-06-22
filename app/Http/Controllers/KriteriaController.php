<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index(){
        $kriterias = Kriteria::all();
        return view('kriteria.index', compact('kriterias'));
    }
}
