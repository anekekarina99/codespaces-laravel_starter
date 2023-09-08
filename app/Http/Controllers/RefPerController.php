<?php

namespace App\Http\Controllers;

use App\Models\RefPer;
use Illuminate\Http\Request;

class RefPerController extends Controller
{
    public function index()
    {
        $refPers = RefPer::all();
        return view('refper.index', compact('refPers'));
    }

    public function create()
    {
        return view('refper.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        RefPer::create($data);
        return redirect()->route('refper.index');
    }

    public function show(RefPer $refPer)
    {
        return view('refper.show', compact('refPer'));
    }

    public function edit(RefPer $refPer)
    {
        return view('refper.edit', compact('refPer'));
    }

    public function update(Request $request, RefPer $refPer)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $refPer->update($data);
        return redirect()->route('refper.index');
    }

    public function destroy(RefPer $refPer)
    {
        $refPer->delete();
        return redirect()->route('refper.index');
    }
}
