<?php

namespace App\Http\Controllers;

use App\ReferensiBahasa;
use Illuminate\Http\Request;

class ReferensiBahasaController extends Controller
{
    public function index()
    {
        $referensiBahasas = ReferensiBahasa::all();
        return view('referensi-bahasa.index', compact('referensiBahasas'));
    }

    public function create()
    {
        return view('referensi-bahasa.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'kode_bahasa' => 'required',
            'nama_bahasa' => 'required',
        ]);

        ReferensiBahasa::create($data);
        return redirect()->route('referensi-bahasa.index');
    }

    public function show(ReferensiBahasa $referensiBahasa)
    {
        return view('referensi-bahasa.show', compact('referensiBahasa'));
    }

    public function edit(ReferensiBahasa $referensiBahasa)
    {
        return view('referensi-bahasa.edit', compact('referensiBahasa'));
    }

    public function update(Request $request, ReferensiBahasa $referensiBahasa)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'kode_bahasa' => 'required',
            'nama_bahasa' => 'required',
        ]);

        $referensiBahasa->update($data);
        return redirect()->route('referensi-bahasa.index');
    }

    public function destroy(ReferensiBahasa $referensiBahasa)
    {
        $referensiBahasa->delete();
        return redirect()->route('referensi-bahasa.index');
    }
}
