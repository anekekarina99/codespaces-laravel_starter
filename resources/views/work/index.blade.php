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

