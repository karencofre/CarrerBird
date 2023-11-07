@extends('app');

@section('content')
<h1 class="text-center">Editar Trabajador</h1>
<div class="container">

    <div class="row">
        <form action="{{ route('trabajador.update', $trabajador->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" value="{{ $trabajador->nombre }}">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa el apellido" value="{{ $trabajador->apellido }}">
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa el correo electrónico" value="{{ $trabajador->correo }}">
            </div>

            <div class="mb-3">
                <label for="expectativa" class="form-label">Expectativa de Renta</label>
                <input type="text" class="form-control" id="expectativa" name="renta" placeholder="Ingresa la expectativa de renta" value="{{ $trabajador->renta }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>


@endsection
