<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Redirect;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::paginate(10);
        $dosen->toJson();

        return view('admin.dosen', ['dosen' => $dosen]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $dosen = Dosen::where('nama', 'like', "%" . $cari . "%")->paginate(10);
        $dosen->toJson();
        return view('admin.dosen', ['dosen' => $dosen]);
    }

    public function store(Request $request)
    {
        //$dosen = new Kompetensi;
        //$dosen->kompetensi = $request->kompetensi;
        //$dosen->save();

        Dosen::create([
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            's1' => $request->s1,
            's2' => $request->s2,
            's3' => $request->s3,
        ],);

        // return redirect('admin/kompetensi');
        return Redirect::back();
    }

    public function update($id, Request $request)
    {
        Dosen::find($id)
            ->update(
                [
                    'nama' => $request->nama,
                    'fakultas' => $request->fakultas,
                    'jabatan_fungsional' => $request->jabatan_fungsional,
                    's1' => $request->s1,
                    's2' => $request->s2,
                    's3' => $request->s3,
                ]
            );
        // return redirect('admin/kompetensi');
        return Redirect::back();
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        if ($dosen->trashed()) {
            //  
        }
        $dosen->delete();
        // return redirect('admin/kompetensi');
        return Redirect::back();
    }
}
