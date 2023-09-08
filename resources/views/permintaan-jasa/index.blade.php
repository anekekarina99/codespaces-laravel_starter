<!-- resources/views/permintaan-jasa/index.blade.php -->
<h1>Daftar Permintaan Jasa</h1>
<table>
    <thead>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Jenis Jasa</th>
            <th>Deskripsi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Total Biaya</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permintaanJasas as $permintaanJasa)
        <tr>
            <td>{{ $permintaanJasa->nama_pelanggan }}</td>
            <td>{{ $permintaanJasa->jenis_jasa }}</td>
            <td>{{ $permintaanJasa->deskripsi }}</td>
            <td>{{ $permintaanJasa->tanggal_mulai }}</td>
            <td>{{ $permintaanJasa->tanggal_selesai }}</td>
            <td>{{ $permintaanJasa->total_biaya }}</td>
            <td><a href="{{ route('permintaan-jasa.show', $permintaanJasa) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
