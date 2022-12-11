<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kompetensi;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::paginate(5);
        $kompetensi->toJson();

        return view('admin.kompetensi', ['kompetensi' => $kompetensi]);
    }

    public function store(Request $request)
    {
        // $kompetensi = new Kompetensi;
        // $kompetensi->kompetensi = $request->kompetensi;
        // $kompetensi->save();
        $this->validate($request, [
            'kompetensi' => 'required',
        ]);

        Kompetensi::create([
            'kompetensi' => $request->kompetensi,
        ],);

        return redirect('admin/kompetensi');
    }

    public function update($id, Request $request)
    {
        kompetensi::find($id)
            ->update(['kompetensi' => $request->kompetensi]);
        return redirect('admin/kompetensi');
    }

    public function destroy($id)
    {
        $kompetensi = Kompetensi::find($id);
        if ($kompetensi->trashed()) {
            //  
        }
        $kompetensi->delete();
        return redirect('admin/kompetensi');
    }
}
