<!DOCTYPE html>
<html>
<head>
    <title>roles</title>
</head>
<body>
    <h1>Lista de roles</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
