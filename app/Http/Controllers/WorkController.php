<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('work.index', compact('works'));
    }

    public function create()
    {
        return view('work.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'name_work' => 'required',
        ]);

        Work::create($data);
        return redirect()->route('work.index');
    }

    public function show(Work $work)
    {
        return view('work.show', compact('work'));
    }

    public function edit(Work $work)
    {
        return view('work.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'name_work' => 'required',
        ]);

        $work->update($data);
        return redirect()->route('work.index');
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('work.index');
    }
}

