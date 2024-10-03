<div class="container">
    <h1>Agregar Municipio</h1>
    <form action="{{ route('municipios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="muni_codi">Código</label>
            <input type="text" name="muni_codi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="muni_nomb">Nombre</label>
            <input type="text" name="muni_nomb" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="depa_codi">Departamento</label>
            <input type="text" name="depa_codi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
    <a href="{{ route('municipios.index') }}" class="btn btn-secondary">Regresar</a>
</div>
