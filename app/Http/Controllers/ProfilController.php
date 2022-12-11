<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::all();
        $kompetensi->toJson();

        return view('profil', ['kompetensi' => $kompetensi]);
    }
}
