@extends('app');

@section('content')
<h1>Editar Trabajador</h1>
<form action="{{ route('trabajador.update', $trabajador->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nombre" class="form-label">Name</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter your name" value="{{ $trabajador->nombre }}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">
            Last Name</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Enter your last name" value="{{ $trabajador->apellido}}">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Email</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Enter your email" value="{{ $trabajador->correo }}">
    </div>

    <div class="mb-3">
        <label for="acercaDe">Cuéntanos acerca de ti:</label>
        <textarea class="form-control" id="acercaDe" name="acercaDe" rows="5" value="{{ $trabajador->acerca_de }}"></textarea>
    </div>

    <div class="mb-3">
        <h2>Expectativa de renta:</h2>
        <label for="expectativa" class="form-label">Expectativa</label>
        <input type="text" class="form-control" id="expectativa" name="expectativa" value="{{ $trabajador->renta }}">
    </div>

    <button type="submit">Actualizar</button>
</form>
@endsection
