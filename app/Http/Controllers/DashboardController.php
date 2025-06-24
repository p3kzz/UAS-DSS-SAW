<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $kategori = Kategori::all()->count();
        $alternatif = Alternatif::all()->count();
        return view('dashboard.dashboard', compact('kategori', 'alternatif'));
    }
}
