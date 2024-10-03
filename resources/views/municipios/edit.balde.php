<div class="container">
    <h1>Editar Municipio</h1>
    <form action="{{ route('municipios.update', $municipio->muni_codi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="muni_codi">Código</label>
            <input type="text" name="muni_codi" class="form-control" value="{{ $municipio->muni_codi }}" readonly>
        </div>
        <div class="form-group">
            <label for="muni_nomb">Nombre</label>
            <input type="text" name="muni_nomb" class="form-control" value="{{ $municipio->muni_nomb }}" required>
        </div>
        <div class="form-group">
            <label for="depa_codi">Código del Departamento</label>
            <input type="text" name="depa_codi" class="form-control" value="{{ $municipio->depa_codi }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    <a href="{{ route('municipios.index') }}" class="btn btn-secondary">Regresar</a>
</div>
