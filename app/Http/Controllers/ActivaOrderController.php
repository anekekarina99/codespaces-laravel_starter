<?php
namespace App\Http\Controllers;

use App\Models\ActivaOrder;
use Illuminate\Http\Request;

class ActivaOrderController extends Controller
{
    public function index()
    {
        $activaOrders = ActivaOrder::all();
        return view('activa-orders.index', compact('activaOrders'));
    }

    public function create()
    {
        return view('activa-orders.create');
    }

    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'tagihan_id' => 'required',
            'jumlah_pembayaran' => 'required',
            'tanggal_pemb' => 'required',
        ]);

        ActivaOrder::create($data);
        return redirect()->route('activa-orders.index');
    }

    public function show(ActivaOrder $activaOrder)
    {
        return view('activa-orders.show', compact('activaOrder'));
    }

    public function edit(ActivaOrder $activaOrder)
    {
        return view('activa-orders.edit', compact('activaOrder'));
    }

    public function update(Request $request, ActivaOrder $activaOrder)
    {
        // Validasi input di sini jika diperlukan
        $data = $request->validate([
            'tagihan_id' => 'required',
            'jumlah_pembayaran' => 'required',
            'tanggal_pemb' => 'required',
        ]);

        $activaOrder->update($data);
        return redirect()->route('activa-orders.index');
    }

    public function destroy(ActivaOrder $activaOrder)
    {
        $activaOrder->delete();
        return redirect()->route('activa-orders.index');
    }
}
