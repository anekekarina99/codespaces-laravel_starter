<?php

namespace App\Http\Controllers;

use App\Models\PermintaanJasa;
use Illuminate\Http\Request;

class PermintaanJasaController extends Controller
{
    public function index()
    {
        $permintaanJasas = PermintaanJasa::all();
        return view('permintaan-jasa.index', compact('permintaanJasas'));
    }

    public function create()
    {
        return view('permintaan-jasa.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'nama_pelanggan' => 'required',
            'jenis_jasa' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'total_biaya' => 'required|integer',
        ]);

        PermintaanJasa::create($data);
        return redirect()->route('permintaan-jasa.index');
    }

    public function show(PermintaanJasa $permintaanJasa)
    {
        return view('permintaan-jasa.show', compact('permintaanJasa'));
    }

    public function edit(PermintaanJasa $permintaanJasa)
    {
        return view('permintaan-jasa.edit', compact('permintaanJasa'));
    }

    public function update(Request $request, PermintaanJasa $permintaanJasa)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'nama_pelanggan' => 'required',
            'jenis_jasa' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'total_biaya' => 'required|integer',
        ]);

        $permintaanJasa->update($data);
        return redirect()->route('permintaan-jasa.index');
    }

    public function destroy(PermintaanJasa $permintaanJasa)
    {
        $permintaanJasa->delete();
        return redirect()->route('permintaan-jasa.index');
    }
}
