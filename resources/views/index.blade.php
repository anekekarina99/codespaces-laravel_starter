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

<!-- resources/views/pesanan-pembelian/index.blade.php -->
<h1>Pesanan Pembelian</h1>
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

<!-- resources/views/penawaran-jasa/index.blade.php -->
<h1>Penawaran Jasa</h1>
<table>
    <thead>
        <tr>
            <th>Work ID</th>
            <th>Project ID</th>
            <th>Jumlah</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penawaranJasas as $penawaranJasa)
        <tr>
            <td>{{ $penawaranJasa->work_id }}</td>
            <td>{{ $penawaranJasa->project_id }}</td>
            <td>{{ $penawaranJasa->jumlah }}</td>
            <td><a href="{{ route('penawaran-jasa.show', $penawaranJasa) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- resources/views/referensi-bahasa/index.blade.php -->
<h1>Referensi Bahasa</h1>
<table>
    <thead>
        <tr>
            <th>Kode Bahasa</th>
            <th>Nama Bahasa</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($referensiBahasas as $referensiBahasa)
        <tr>
            <td>{{ $referensiBahasa->kode_bahasa }}</td>
            <td>{{ $referensiBahasa->nama_bahasa }}</td>
            <td><a href="{{ route('referensi-bahasa.show', $referensiBahasa) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- resources/views/refper/index.blade.php -->
<h1>Referensi Perusahaan</h1>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($refPers as $refPer)
        <tr>
            <td>{{ $refPer->nama }}</td>
            <td>{{ $refPer->alamat }}</td>
            <td>{{ $refPer->telepon }}</td>
            <td><a href="{{ route('refper.show', $refPer) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- resources/views/total-payment/index.blade.php -->
<h1>Total Payment</h1>
<table>
    <thead>
        <tr>
            <th>Project ID</th>
            <th>Total Tagihan</th>
            <th>Tanggal Tagihan</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($totalPayments as $totalPayment)
        <tr>
            <td>{{ $totalPayment->project_id }}</td>
            <td>{{ $totalPayment->total_tagihan }}</td>
            <td>{{ $totalPayment->tanggal_tagihan }}</td>
            <td><a href="{{ route('total-payment.show', $totalPayment) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- resources/views/work/index.blade.php -->
<h1>Work</h1>
<table>
    <thead>
        <tr>
            <th>Name Work</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($works as $work)
        <tr>
            <td>{{ $work->name_work }}</td>
            <td><a href="{{ route('work.show', $work) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- resources/views/users/index.blade.php -->
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{ route('users.show', $user) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
