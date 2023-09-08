<?php

namespace App\Http\Controllers;

use App\TotalPayment;
use Illuminate\Http\Request;

class TotalPaymentController extends Controller
{
    public function index()
    {
        $totalPayments = TotalPayment::all();
        return view('total-payment.index', compact('totalPayments'));
    }

    public function create()
    {
        return view('total-payment.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'project_id' => 'required',
            'total_tagihan' => 'required',
            'tanggal_tagihan' => 'required',
        ]);

        TotalPayment::create($data);
        return redirect()->route('total-payment.index');
    }

    public function show(TotalPayment $totalPayment)
    {
        return view('total-payment.show', compact('totalPayment'));
    }

    public function edit(TotalPayment $totalPayment)
    {
        return view('total-payment.edit', compact('totalPayment'));
    }

    public function update(Request $request, TotalPayment $totalPayment)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'project_id' => 'required',
            'total_tagihan' => 'required',
            'tanggal_tagihan' => 'required',
        ]);

        $totalPayment->update($data);
        return redirect()->route('total-payment.index');
    }

    public function destroy(TotalPayment $totalPayment)
    {
        $totalPayment->delete();
        return redirect()->route('total-payment.index');
    }
}

