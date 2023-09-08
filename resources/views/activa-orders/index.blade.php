<!-- resources/views/activa-orders/index.blade.php -->
<h1>ActivA Orders</h1>
<table>
    <thead>
        <tr>
            <th>Tagihan ID</th>
            <th>Jumlah Pembayaran</th>
            <th>Tanggal Pembayaran</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activaOrders as $activaOrder)
        <tr>
            <td>{{ $activaOrder->tagihan_id }}</td>
            <td>{{ $activaOrder->jumlah_pembayaran }}</td>
            <td>{{ $activaOrder->tanggal_pemb }}</td>
            <td><a href="{{ route('activa-orders.show', $activaOrder) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

