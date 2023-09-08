<!-- resources/views/activa-orders/index.blade.php -->
@foreach ($activaOrders as $activaOrder)
    {{ $activaOrder->tagihan_id }} - {{ $activaOrder->jumlah_pembayaran }} - {{ $activaOrder->tanggal_pemb }}
    <a href="{{ route('activa-orders.show', $activaOrder) }}">Detail</a>
@endforeach
