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

