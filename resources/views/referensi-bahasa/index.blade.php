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

