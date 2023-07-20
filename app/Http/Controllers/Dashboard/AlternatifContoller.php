<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class AlternatifContoller extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all();
        
        $minimum_C1 = Alternatif::pluck('C1')->min();
        $minimum_C2 = Alternatif::pluck('C2')->min();
        $minimum_C3 = Alternatif::pluck('C3')->min();
        $minimum_C4 = Alternatif::pluck('C4')->min();
        $minimum_C5 = Alternatif::pluck('C5')->min();

        $maxsimum_C1 = Alternatif::pluck('C1')->max();
        $maxsimum_C2 = Alternatif::pluck('C2')->max();
        $maxsimum_C3 = Alternatif::pluck('C3')->max();
        $maxsimum_C4 = Alternatif::pluck('C4')->max();
        $maxsimum_C5 = Alternatif::pluck('C5')->max();

        // Start C1
        $top_angga = 5 - $minimum_C1;
        $bottom_angga = $maxsimum_C1 - $minimum_C1;
        $C1_angga = $top_angga / $bottom_angga;

        $top_anniza = 4 - $minimum_C1;
        $bottom_anniza = $maxsimum_C1 - $minimum_C1;
        $C1_anniza = $top_anniza / $bottom_anniza;

        $top_donny = 5 - $minimum_C1;
        $bottom_donny = $maxsimum_C1 - $minimum_C1;
        $C1_donny = $top_donny / $bottom_donny;

        $top_muhammad = 4 - $minimum_C1;
        $bottom_muhammad = $maxsimum_C1 - $minimum_C1;
        $C1_muhammad = $top_muhammad / $bottom_muhammad;

        $top_naina = 5 - $minimum_C1;
        $bottom_naina = $maxsimum_C1 - $minimum_C1;
        $C1_naina = $top_naina / $bottom_naina;
        // End C1

        // Start C2
        $top_angga = 4 - $minimum_C2;
        $bottom_angga = $maxsimum_C2 - $minimum_C2;
        $C2_angga = $top_angga / $bottom_angga;

        $top_anniza = 4 - $minimum_C2;
        $bottom_anniza = $maxsimum_C2 - $minimum_C2;
        $C2_anniza = $top_anniza / $bottom_anniza;

        $top_donny = 3 - $minimum_C2;
        $bottom_donny = $maxsimum_C2 - $minimum_C2;
        $C2_donny = $top_donny / $bottom_donny;

        $top_muhammad = 5 - $minimum_C2;
        $bottom_muhammad = $maxsimum_C2 - $minimum_C2;
        $C2_muhammad = $top_muhammad / $bottom_muhammad;

        $top_naina = 4 - $minimum_C2;
        $bottom_naina = $maxsimum_C2 - $minimum_C2;
        $C2_naina = $top_naina / $bottom_naina;
        // End C2

        // Start C3
        $top_angga = 4 - $minimum_C3;
        $bottom_angga = $maxsimum_C3 - $minimum_C3;
        $C3_angga = $top_angga / $bottom_angga;

        $top_anniza = 4 - $minimum_C3;
        $bottom_anniza = $maxsimum_C3 - $minimum_C3;
        $C3_anniza = $top_anniza / $bottom_anniza;

        $top_donny = 4 - $minimum_C3;
        $bottom_donny = $maxsimum_C3 - $minimum_C3;
        $C3_donny = $top_donny / $bottom_donny;

        $top_muhammad = 4 - $minimum_C3;
        $bottom_muhammad = $maxsimum_C3 - $minimum_C3;
        $C3_muhammad = $top_muhammad / $bottom_muhammad;

        $top_naina = 2 - $minimum_C3;
        $bottom_naina = $maxsimum_C3 - $minimum_C3;
        $C3_naina = $top_naina / $bottom_naina;
        // End C3

        // Start C4
        $top_angga = 4 - $minimum_C4;
        $bottom_angga = $maxsimum_C4 - $minimum_C4;
        $C4_angga = $top_angga / $bottom_angga;

        $top_anniza = 4 - $minimum_C4;
        $bottom_anniza = $maxsimum_C4 - $minimum_C4;
        $C4_anniza = $top_anniza / $bottom_anniza;

        $top_donny = 4 - $minimum_C4;
        $bottom_donny = $maxsimum_C4 - $minimum_C4;
        $C4_donny = $top_donny / $bottom_donny;

        $top_muhammad = 3 - $minimum_C4;
        $bottom_muhammad = $maxsimum_C4 - $minimum_C4;
        $C4_muhammad = $top_muhammad / $bottom_muhammad;

        $top_naina = 5 - $minimum_C4;
        $bottom_naina = $maxsimum_C4 - $minimum_C4;
        $C4_naina = $top_naina / $bottom_naina;
        // End C4

        // Start C5
        $top_angga = 3 - $minimum_C5;
        $bottom_angga = $maxsimum_C5 - $minimum_C5;
        $C5_angga = $top_angga / $bottom_angga;

        $top_anniza = 2 - $minimum_C5;
        $bottom_anniza = $maxsimum_C5 - $minimum_C5;
        $C5_anniza = $top_anniza / $bottom_anniza;

        $top_donny = 3 - $minimum_C5;
        $bottom_donny = $maxsimum_C5 - $minimum_C5;
        $C5_donny = $top_donny / $bottom_donny;

        $top_muhammad = 2 - $minimum_C5;
        $bottom_muhammad = $maxsimum_C5 - $minimum_C5;
        $C5_muhammad = $top_muhammad / $bottom_muhammad;

        $top_naina = 3 - $minimum_C5;
        $bottom_naina = $maxsimum_C5 - $minimum_C5;
        $C5_naina = $top_naina / $bottom_naina;
        // End C5

        $total_bobot_awal = Kriteria::pluck('bobot_awal')->sum();

        $bobot_C1 = 10 / $total_bobot_awal;
        $bobot_C2 = 25 / $total_bobot_awal;
        $bobot_C3 = 20 / $total_bobot_awal;
        $bobot_C4 = 35 / $total_bobot_awal;
        $bobot_C5 = 10 / $total_bobot_awal;

        // dd($bobot_C5);

        // Strat NA_C1
        $NA_C1_angga = $bobot_C1 * $C1_angga;
        $NA_C1_anniza = $bobot_C1 * $C1_anniza;
        $NA_C1_donny = $bobot_C1 * $C1_donny;
        $NA_C1_muhammad = $bobot_C1 * $C1_muhammad;
        $NA_C1_naina = $bobot_C1 * $C1_naina;
        // ENd NA_C1

        // Strat NA_C2
        $NA_C2_angga = $bobot_C2 * $C2_angga;
        $NA_C2_anniza = $bobot_C2 * $C2_anniza;
        $NA_C2_donny = $bobot_C2 * $C2_donny;
        $NA_C2_muhammad = $bobot_C2 * $C2_muhammad;
        $NA_C2_naina = $bobot_C2 * $C2_naina;
        // ENd NA_C2

        // Strat NA_C3
        $NA_C3_angga = $bobot_C3 * $C3_angga;
        $NA_C3_anniza = $bobot_C3 * $C3_anniza;
        $NA_C3_donny = $bobot_C3 * $C3_donny;
        $NA_C3_muhammad = $bobot_C3 * $C3_muhammad;
        $NA_C3_naina = $bobot_C3 * $C3_naina;
        // ENd NA_C3

        // Strat NA_C4
        $NA_C4_angga = $bobot_C4 * $C4_angga;
        $NA_C4_anniza = $bobot_C4 * $C4_anniza;
        $NA_C4_donny = $bobot_C4 * $C4_donny;
        $NA_C4_muhammad = $bobot_C4 * $C4_muhammad;
        $NA_C4_naina = $bobot_C4 * $C4_naina;
        // ENd NA_C4

        // Strat NA_C5
        $NA_C5_angga = $bobot_C5 * $C5_angga;
        $NA_C5_anniza = $bobot_C5 * $C5_anniza;
        $NA_C5_donny = $bobot_C5 * $C5_donny;
        $NA_C5_muhammad = $bobot_C5 * $C5_muhammad;
        $NA_C5_naina = $bobot_C5 * $C5_naina;
        // ENd NA_C5

        // Hasil Akhir
        $HA_angga = $NA_C1_angga + $NA_C2_angga + $NA_C3_angga + $NA_C4_angga + $NA_C5_angga;
        $HA_anniza = $NA_C1_anniza + $NA_C2_anniza + $NA_C3_anniza + $NA_C4_anniza + $NA_C5_anniza;
        $HA_donny = $NA_C1_donny + $NA_C2_donny + $NA_C3_donny + $NA_C4_donny + $NA_C5_donny;
        $HA_muhammad = $NA_C1_muhammad + $NA_C2_muhammad + $NA_C3_muhammad + $NA_C4_muhammad + $NA_C5_muhammad;
        $HA_naina = $NA_C1_naina + $NA_C2_naina + $NA_C3_naina + $NA_C4_naina + $NA_C5_naina;
        // End Hasil Akhir

        return view('dashboard.alternatif.index', compact('alternatif', 'minimum_C1', 'minimum_C2', 'minimum_C3', 'minimum_C4', 'minimum_C5', 'maxsimum_C1', 'maxsimum_C2', 'maxsimum_C3', 'maxsimum_C4', 'maxsimum_C5', 'C1_angga', 'C1_anniza', 'C1_donny', 'C1_muhammad', 'C1_naina', 'C2_angga', 'C2_anniza', 'C2_donny', 'C2_muhammad', 'C2_naina', 'C3_angga', 'C3_anniza', 'C3_donny', 'C3_muhammad', 'C3_naina', 'C4_angga', 'C4_anniza', 'C4_donny', 'C4_muhammad', 'C4_naina', 'C5_angga', 'C5_anniza', 'C5_donny', 'C5_muhammad', 'C5_naina', 'NA_C1_angga', 'NA_C1_anniza', 'NA_C1_donny', 'NA_C1_muhammad', 'NA_C1_naina', 'NA_C2_angga', 'NA_C2_anniza', 'NA_C2_donny', 'NA_C2_muhammad', 'NA_C2_naina', 'NA_C3_angga', 'NA_C3_anniza', 'NA_C3_donny', 'NA_C3_muhammad', 'NA_C3_naina', 'NA_C4_angga', 'NA_C4_anniza', 'NA_C4_donny', 'NA_C4_muhammad', 'NA_C4_naina', 'NA_C5_angga', 'NA_C5_anniza', 'NA_C5_donny', 'NA_C5_muhammad', 'NA_C5_naina', 'bobot_C1', 'bobot_C2', 'bobot_C3', 'bobot_C4', 'bobot_C5', 'bobot_C2', 'bobot_C3', 'bobot_C4', 'bobot_C5', 'HA_angga', 'HA_anniza', 'HA_donny', 'HA_muhammad', 'HA_naina') );
    }

    public function create()
    {
        return view('dashboard.alternatif.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'alternatif' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);

        $alternatif = Alternatif::create($validator);

        return redirect()->route('alternatif.index')->with('success', 'Data Alternatif Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $a = Alternatif::find($id);

        return view('dashboard.alternatif.edit', compact('a'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'alternatif' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);

        $alternatif = Alternatif::find($id)->update($validator);

        return redirect()->route('alternatif.index')->with('success', 'Data Alternatif Berhasil Di Update');
    }

    public function destroy($id)
    {
        Alternatif::find($id)->delete();

        return redirect()->route('alternatif.index')->with('success', 'Data Alternatif Berhasil Di Hapus');
    }
}
