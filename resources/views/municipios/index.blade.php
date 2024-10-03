<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Listado de Municipios</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                    <tr>
                        <td>{{ $municipio->muni_codi }}</td>
                        <td>{{ $municipio->muni_nomb }}</td>
                        <td>{{ $municipio->depa_nomb }}</td>
                        <td>
                            <a href="{{ route('municipios.edit', $municipio->muni_codi) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('municipios.destroy', $municipio->muni_codi) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('municipios.create') }}" class="btn btn-primary">Agregar Municipio</a>
    </div>
</body>
</html>
