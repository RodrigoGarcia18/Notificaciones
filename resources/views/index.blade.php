<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas del Curso</title>
</head>
<body>
    <h1>Notas del Curso {{ $courseId }}</h1>

    <table >
        <thead>
            <tr>
                <th>Usuario ID</th>
                <th>Nota Final</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($notas as $nota)
                <tr>
                    <td>{{ $nota->user_id }}</td>
                    <td>{{ $nota->nota }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No se encontraron notas para este curso.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
