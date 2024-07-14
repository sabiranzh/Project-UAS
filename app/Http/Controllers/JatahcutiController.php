<?php

namespace App\Http\Controllers;

use App\Models\Jatahcuti;
use Illuminate\Http\Request;

class JatahcutiController extends Controller
{
    public function index()
    {
        $jatahcuti = Jatahcuti::all();
        return view('admin.contents.Jatahcuti.index', ['jatahcuti' => $jatahcuti]);
    }

    public function edit($id)
    {
        $jatahcuti = Jatahcuti::findOrFail($id);
        return view('admin.contents.Jatahcuti.edit', ['jatahcuti' => $jatahcuti]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tahun' => 'required|date',
            'jumlah' => 'required|integer',
            'nip' => 'required|string',
        ]);

        $jatahcuti = Jatahcuti::findOrFail($id);

        // Konversi input 'tahun' ke format yang sesuai (misalnya hanya tahun saja)
        $tahun = date('Y', strtotime($request->input('tahun')));

        $jatahcuti->tahun = $tahun;
        $jatahcuti->jumlah = $request->input('jumlah');
        $jatahcuti->nip = $request->input('nip');

        $jatahcuti->save();

        return redirect()->route('jatahcuti.index')->with('success', 'Jatah cuti updated successfully');
    }

    public function destroy($id)
    {
        $jatahcuti = Jatahcuti::findOrFail($id);
        $jatahcuti->delete();

        return redirect()->route('jatahcuti.index')->with('success', 'Jatah cuti deleted successfully');
    }
}
