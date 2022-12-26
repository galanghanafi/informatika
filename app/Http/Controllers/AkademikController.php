<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();

        return view('akademik', ['dosen' => $dosen]);
    }
}
