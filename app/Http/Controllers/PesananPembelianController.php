<?php

namespace App\Http\Controllers;

use App\Models\PesananPembelian;
use Illuminate\Http\Request;

class PesananPembelianController extends Controller
{
    public function index()
    {
        $pesananPembelians = PesananPembelian::all();
        return view('pesanan-pembelian.index', compact('pesananPembelians'));
    }

    public function create()
    {
        return view('pesanan-pembelian.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'client_id' => 'required',
            'tanggal_pesanan' => 'required',
            'nomor_pesanan' => 'required',
        ]);

        PesananPembelian::create($data);
        return redirect()->route('pesanan-pembelian.index');
    }

    public function show(PesananPembelian $pesananPembelian)
    {
        return view('pesanan-pembelian.show', compact('pesananPembelian'));
    }

    public function edit(PesananPembelian $pesananPembelian)
    {
        return view('pesanan-pembelian.edit', compact('pesananPembelian'));
    }

    public function update(Request $request, PesananPembelian $pesananPembelian)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'client_id' => 'required',
            'tanggal_pesanan' => 'required',
            'nomor_pesanan' => 'required',
        ]);

        $pesananPembelian->update($data);
        return redirect()->route('pesanan-pembelian.index');
    }

    public function destroy(PesananPembelian $pesananPembelian)
    {
        $pesananPembelian->delete();
        return redirect()->route('pesanan-pembelian.index');
    }
}
