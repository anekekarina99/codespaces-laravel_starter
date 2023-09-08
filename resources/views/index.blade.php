<!-- -->
@foreach ($activaOrders as $activaOrder)
    {{ $activaOrder->tagihan_id }} - {{ $activaOrder->jumlah_pembayaran }} - {{ $activaOrder->tanggal_pemb }}
    <a href="{{ route('activa-orders.show', $activaOrder) }}">Detail</a>
@endforeach

<!-- resources/views/pesanan-pembelian/index.blade.php -->
@foreach ($pesananPembelians as $pesananPembelian)
    {{ $pesananPembelian->client_id }} - {{ $pesananPembelian->tanggal_pesanan }} - {{ $pesananPembelian->nomor_pesanan }}
    <a href="{{ route('pesanan-pembelian.show', $pesananPembelian) }}">Detail</a>
@endforeach

<!-- resources/views/penawaran-jasa/index.blade.php -->
@foreach ($penawaranJasas as $penawaranJasa)
    {{ $penawaranJasa->work_id }} - {{ $penawaranJasa->project_id }} - {{ $penawaranJasa->jumlah }}
    <a href="{{ route('penawaran-jasa.show', $penawaranJasa) }}">Detail</a>
@endforeach

<!-- resources/views/pesanan-pembelian/index.blade.php -->
@foreach ($pesananPembelians as $pesananPembelian)
    {{ $pesananPembelian->client_id }} - {{ $pesananPembelian->tanggal_pesanan }} - {{ $pesananPembelian->nomor_pesanan }}
    <a href="{{ route('pesanan-pembelian.show', $pesananPembelian) }}">Detail</a>
@endforeach

<!-- resources/views/referensi-bahasa/index.blade.php -->
@foreach ($referensiBahasas as $referensiBahasa)
    {{ $referensiBahasa->kode_bahasa }} - {{ $referensiBahasa->nama_bahasa }}
    <a href="{{ route('referensi-bahasa.show', $referensiBahasa) }}">Detail</a>
@endforeach

<!-- resources/views/refper/index.blade.php -->
@foreach ($refPers as $refPer)
    {{ $refPer->nama }} - {{ $refPer->alamat }} - {{ $refPer->telepon }}
    <a href="{{ route('refper.show', $refPer) }}">Detail</a>
@endforeach

<!-- resources/views/total-payment/index.blade.php -->
@foreach ($totalPayments as $totalPayment)
    {{ $totalPayment->project_id }} - {{ $totalPayment->total_tagihan }} - {{ $totalPayment->tanggal_tagihan }}
    <a href="{{ route('total-payment.show', $totalPayment) }}">Detail</a>
@endforeach

<!-- resources/views/work/index.blade.php -->
@foreach ($works as $work)
    {{ $work->name_work }}
    <a href="{{ route('work.show', $work) }}">Detail</a>
@endforeach

<!-- resources/views/users/index.blade.php -->
@foreach ($users as $user)
    {{ $user->name }} - {{ $user->email }}
    <a href="{{ route('users.show', $user) }}">Detail</a>
@endforeach
