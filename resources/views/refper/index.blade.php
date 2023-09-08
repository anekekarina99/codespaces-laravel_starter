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

