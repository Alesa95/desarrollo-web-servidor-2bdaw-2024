<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcas</title>
</head>
<body>
    <h1>Lista de marcas</h1>
    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Año de fundación</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
                <tr>
                    <td>{{ $marca -> marca }}</td>
                    <td>{{ $marca -> ano_fundacion }}</td>
                    <td>{{ $marca -> pais }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>