<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungTotalSksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $total = \App\Models\matakuliah::sum('sks');
        $perSks = \App\Models\matakuliah::selectRaw('sks, count(*) as jumlah_sks')->groupBy('sks')->get();

        return view('statistik', compact('total', 'perSks'));
    }
}
