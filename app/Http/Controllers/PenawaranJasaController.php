<?php

namespace App\Http\Controllers;

use App\Models\PenawaranJasa;
use Illuminate\Http\Request;

class PenawaranJasaController extends Controller
{
    public function index()
    {
        $penawaranJasas = PenawaranJasa::all();
        return view('penawaran-jasa.index', compact('penawaranJasas'));
    }

    public function create()
    {
        return view('penawaran-jasa.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'work_id' => 'required',
            'project_id' => 'required',
            'jumlah' => 'required',
        ]);

        PenawaranJasa::create($data);
        return redirect()->route('penawaran-jasa.index');
    }

    public function show(PenawaranJasa $penawaranJasa)
    {
        return view('penawaran-jasa.show', compact('penawaranJasa'));
    }

    public function edit(PenawaranJasa $penawaranJasa)
    {
        return view('penawaran-jasa.edit', compact('penawaranJasa'));
    }

    public function update(Request $request, PenawaranJasa $penawaranJasa)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'work_id' => 'required',
            'project_id' => 'required',
            'jumlah' => 'required',
        ]);

        $penawaranJasa->update($data);
        return redirect()->route('penawaran-jasa.index');
    }

    public function destroy(PenawaranJasa $penawaranJasa)
    {
        $penawaranJasa->delete();
        return redirect()->route('penawaran-jasa.index');
    }
}
