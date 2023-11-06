@extends('app');

@section('content')

<div class="container">
    <h1 class="my-4">Build Your CV</h1>
    <form action="{{route('trabajador.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Name</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">
                Last Name</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Enter your last name">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Email</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>

        <div class="mb-3">
            <label for="acercaDe">Cuéntanos acerca de ti:</label>
            <textarea class="form-control" id="acercaDe" name="acercaDe" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <h2>Expectativa de renta:</h2>
            <label for="expectativa" class="form-label">Expectativa</label>
            <input type="text" class="form-control" id="expectativa" name="expectativa">
        </div>
        <div class="container">
            <div class="row">
                <button type="submit" class="btn btn-primary col-md-12 my-2">Guardar</button>
                <button type="submit" class="btn btn-primary col-md-12">Actualizar</button>
            </div>
        </div>

    </form>

    <form action="{{route('formacion.store')}}" method="POST">
        <div class="mb-3">
            @php
            use App\Models\Trabajador;
            $trabajadores = Trabajador::all();


            @endphp
                <label for="miSelect">Selecciona una trabajador:</label>
                <select class="form-control" id="miSelect">
                    @foreach($trabajadores as $trabajador)
        <option value="{{ $trabajador->trabajador_id }}">{{ $trabajador->nombre . $trabajador->appellido}}</option>
    @endforeach
                </select>



        </div>
        <div class="mb-3">
            <h2>Formacion Academica:</h2>
            <label for="institucion" class="form-label">Institucion</label>
            <input type="text" class="form-control" id="institucion" name="institucion">
            <label for="fecha_inicio_f" class="form-label">Fecha de inicio</label>
            <input type="text" class="form-control" id="fecha_inicio_f" name="fecha_inicio_f">
            <label for="fecha_fin_f" class="form-label">Fecha de fin</label>
            <input type="text" class="form-control" id="fecha_fin_f" name="fecha_fin_f">
            <label for="descripcion">Descripcion:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
        </div>
        <div class="container">
            <div class="row">
                <button type="submit" class="btn btn-primary col-md-12 my-2">Guardar</button>
                <button type="submit" class="btn btn-primary col-md-12">Actualizar</button>
            </div>
        </div>

    </form>

    <form action="{{route('trabajo.store')}}" method="POST">
        <div class="mb-3">
            @php

            $trabajadores = Trabajador::all();


            @endphp
                <label for="miSelect">Selecciona una trabajador:</label>
                <select class="form-control" id="miSelect2">
                    @foreach($trabajadores as $trabajador)
        <option value="{{ $trabajador->trabajador_id }}">{{ $trabajador->nombre . $trabajador->appellido}}</option>
    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <h2>Experiencia Laboral:</h2>

            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo">
            <label for="fecha_inicio_e" class="form-label">Fecha de inicio</label>
            <input type="text" class="form-control" id="fecha_inicio_e" name="fecha_inicio_e">
            <label for="fecha_fin_e" class="form-label">Fecha de fin</label>
            <input type="text" class="form-control" id="fecha_fin_e" name="fecha_fin_e">
            <label for="descripcion">Descripcion:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>
        </div>
        <div class="container">
            <div class="row">
                <button type="submit" class="btn btn-primary col-md-12 my-2">Guardar</button>
                <button type="submit" class="btn btn-primary col-md-12">Actualizar</button>
            </div>
        </div>

    </form>
</div>
@endsection
