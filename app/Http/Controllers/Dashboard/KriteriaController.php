<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();

        $bobot_kriteria = Kriteria::sum('bobot_awal');

        $bobot_awal_C1 = 10 / $bobot_kriteria;
        $bobot_awal_C2 = 25 / $bobot_kriteria;
        $bobot_awal_C3 = 20 / $bobot_kriteria;
        $bobot_awal_C4 = 35 / $bobot_kriteria;
        $bobot_awal_C5 = 10 / $bobot_kriteria;

        $total_bobot_awal = Kriteria::pluck('bobot_awal')->sum();

        return view('dashboard.kriteria.index', compact('kriteria', 'total_bobot_awal'));
    }

    public function create()
    {
        return view('dashboard.kriteria.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'alternatif_kriteria' => 'required',
            'bobot_awal' => 'required',
            'deskripsi_kriteria' => 'required',
        ]);

        $kriteria = Kriteria::create($validator);

        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $k = Kriteria::find($id);

        return view('dashboard.kriteria.edit', compact('k'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'alternatif_kriteria' => 'required',
            'bobot_awal' => 'required',
            'deskripsi_kriteria' => 'required',
        ]);

        $kriteria = Kriteria::find($id)->update($validator);

        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Update');
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::find($id)->delete();
        
        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Hapus');
    }
}
