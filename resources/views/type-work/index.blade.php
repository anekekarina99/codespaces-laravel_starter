<!-- resources/views/type-work/index.blade.php -->
<h1>Type Work</h1>
<table>
    <thead>
        <tr>
            <th>Name Type</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($typeWorks as $typeWork)
        <tr>
            <td>{{ $typeWork->name_type }}</td>
            <td><a href="{{ route('type-work.show', $typeWork) }}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
