<!-- resources/views/project/index.blade.php -->
<h1>Daftar Proyek</h1>
<table>
    <thead>
        <tr>
            <th>Nama Proyek</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Client ID</th>
            <th>Telepon</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->name }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date }}</td>
            <td>{{ $project->client_id_project }}</td>
            <td>{{ $project->telepon }}</td>
            <td><a href="{{ route('project.show', $project) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
