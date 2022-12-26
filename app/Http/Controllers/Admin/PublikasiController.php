<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $dosen = Dosen::paginate(10);
        $publikasi = Publikasi::all();
        // dd($publikasi);
        return view('admin.publikasi', [
            'publikasi' => $publikasi,
            'dosen' => $dosen
        ]);
    }
}
