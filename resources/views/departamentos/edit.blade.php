<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Departamento</title>
</head>
<body>
<div class="container">
    <h1>Edit Departamento</h1>
    <form method="POST" action="{{ route('departamentos.update', ['departamento' => $departamento->depa_codi]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="depa_codi" class="form-label">Code</label>
            <input type="text" class="form-control" id="depa_codi" name="depa_codi" value="{{ $departamento->depa_codi }}" readonly>
        </div>

        <div class="mb-3">
            <label for="depa_nomb" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="depa_nomb" name="depa_nomb" value="{{ $departamento->depa_nomb }}">
        </div>

        <label for="pais_codi">Country:</label>
        <select class="form-select" id="pais_codi" name="pais_codi" required>
            @foreach ($paises as $pais)
                <option value="{{ $pais->pais_codi }}" {{ $pais->pais_codi == $departamento->pais_codi ? 'selected' : '' }}>
                    {{ $pais->pais_nomb }}
                </option>
            @endforeach
        </select>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('departamentos.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
