<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Oficinas</title>
    <style>
        body { font-family: sans-serif; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            padding: 6px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Listado de Oficinas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($oficinas as $oficina)
            <tr>
                <td>{{ $oficina->id }}</td>
                <td>{{ $oficina->nombre }}</td>
                <td>{{ $oficina->direccion }}</td>
                <td>{{ $oficina->telefono }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
