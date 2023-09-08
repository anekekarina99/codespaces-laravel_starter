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
