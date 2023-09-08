<!-- resources/views/pesanan-pembelian/index.blade.php -->
@foreach ($pesananPembelians as $pesananPembelian)
    {{ $pesananPembelian->client_id }} - {{ $pesananPembelian->tanggal_pesanan }} - {{ $pesananPembelian->nomor_pesanan }}
    <a href="{{ route('pesanan-pembelian.show', $pesananPembelian) }}">Detail</a>
@endforeach
