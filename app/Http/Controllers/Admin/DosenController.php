<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\UploadedFile;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::paginate(10);
        $dosen->toJson();

        $fakultas = Fakultas::all();
        $fakultas->toJson();

        return view('admin.dosen', [
            'dosen' => $dosen,
            'fakultas' => $fakultas,
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $dosen = Dosen::where('nama', 'like', "%" . $cari . "%")->paginate(10);
        $dosen->toJson();

        $fakultas = Fakultas::all();
        $fakultas->toJson();

        return view('admin.dosen', [
            'dosen' => $dosen,
            'fakultas' => $fakultas,
        ]);
    }

    public function store(Request $request)
    {
        if ($request->has('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '-' . $photo->getClientOriginalName();
            $photoPath = '/images/dosen/' . $photoName;
            $photo->move('images/dosen/', $photoName);

            Dosen::create([
                'photo' => $photoPath
            ]);
        }

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
        $photoPath = null;
        if ($request->has('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '-' . $photo->getClientOriginalName();
            $photoPath = '/images/dosen/' . $photoName;
            $photo->move('images/dosen/', $photoName);

            Dosen::find($id)->update([
                'photo' => $photoPath
            ]);
        }

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

    public function tambahPhoto(Request $request, $id)
    {
        $photo = $request->file('photo');
        $photoName = time() . '-' . $photo->getClientOriginalName();
        // dd($photoName);
        $photo->move('images/dosen', $photoName);

        Dosen::find($id)
            ->update(
                [
                    'photo' => '/images/dosen/' . $photoName,
                ]
            );
    }
}
