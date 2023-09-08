<?php

namespace App\Http\Controllers;

use App\TypeWork;
use Illuminate\Http\Request;

class TypeWorkController extends Controller
{
    public function index()
    {
        $typeWorks = TypeWork::all();
        return view('type-work.index', compact('typeWorks'));
    }

    public function create()
    {
        return view('type-work.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'name_type' => 'required',
        ]);

        TypeWork::create($data);
        return redirect()->route('type-work.index');
    }

    public function show(TypeWork $typeWork)
    {
        return view('type-work.show', compact('typeWork'));
    }

    public function edit(TypeWork $typeWork)
    {
        return view('type-work.edit', compact('typeWork'));
    }

    public function update(Request $request, TypeWork $typeWork)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'name_type' => 'required',
        ]);

        $typeWork->update($data);
        return redirect()->route('type-work.index');
    }

    public function destroy(TypeWork $typeWork)
    {
        $typeWork->delete();
        return redirect()->route('type-work.index');
    }
}
