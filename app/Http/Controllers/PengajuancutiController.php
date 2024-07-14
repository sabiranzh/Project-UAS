<?php

namespace App\Http\Controllers;

use App\Models\Pengajuancuti;
use Illuminate\Http\Request;

class PengajuancutiController extends Controller
{
    public function index()
    {
        $pengajuancuti = Pengajuancuti::all();
        return view('admin.contents.Pengajuancuti.index', ['pengajuancuti' => $pengajuancuti]);
    }

    public function create()
    {
        return view('admin.contents.Pengajuancuti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'jumlah' => 'required|numeric',
            'ket' => 'nullable|string',
        ]);

        Pengajuancuti::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'tanggal_awal' => $request->tanggal_awal,
            'tanggal_akhir' => $request->tanggal_akhir,
            'jumlah' => $request->jumlah,
            'ket' => $request->ket,
            'status' => 'Pending'
        ]);

        return redirect()->route('pengajuancuti.index')->with('success', 'Pengajuan cuti berhasil disimpan.');
    }
}
