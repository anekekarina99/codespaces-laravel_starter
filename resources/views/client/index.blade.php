<!-- resources/views/clients/index.blade.php -->
<h1>Daftar Client</h1>
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
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->nama }}</td>
            <td>{{ $client->alamat }}</td>
            <td>{{ $client->telepon }}</td>
            <td><a href="{{ route('clients.show', $client) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
