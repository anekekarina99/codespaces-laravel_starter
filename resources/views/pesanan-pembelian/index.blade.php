<!-- resources/views/pesanan-pembelian/index.blade.php -->
<h1>Daftar Pesanan Pembelian</h1>
<table>
    <thead>
        <tr>
            <th>Client ID</th>
            <th>Tanggal Pesanan</th>
            <th>Nomor Pesanan</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pesananPembelians as $pesananPembelian)
        <tr>
            <td>{{ $pesananPembelian->client_id }}</td>
            <td>{{ $pesananPembelian->tanggal_pesanan }}</td>
            <td>{{ $pesananPembelian->nomor_pesanan }}</td>
            <td><a href="{{ route('pesanan-pembelian.show', $pesananPembelian) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
