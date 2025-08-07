<!-- resources/views/users/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Roles PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
        }

        th {
            background-color: #e3e3e3;
        }
    </style>
</head>
<body>
    <h2>Lista de Roles</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i => $role)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
