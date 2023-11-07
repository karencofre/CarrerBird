@extends('app');

@section('content')
<h2 class="text-center">Gestion Perfiles</h2>
<div class="container">
    <div class="row">
        @php
        use App\Models\Trabajador;
        $trabajadores = Trabajador::all();
        foreach ($trabajadores as $trabajador) {
            echo '<div class="col-md-4">';
            echo '<div class="card my-2">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $trabajador["nombre"]." " .$trabajador["apellido"]. '</h5>';
            echo '<p class="card-text">Correo: ' . $trabajador["correo"] . '</p>';
            echo '<p class="card-text">Renta: ' . $trabajador["renta"] . '</p>';
            echo '<p class="card-text">Puntuación: ' . $trabajador["puntuacion"] . '</p>';
           @endphp
                        <a onclick="confirm('¿Está seguro que desea eliminar la organizacion de adoptame.cl?')">
                        <form action="{{ route('trabajador.destroy', $trabajador->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="form-group btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </a>
                        <a href="{{ route('trabajador.editar', $trabajador->id) }}">
                            <button class="form-group btn btn-primary" type="submit">Editar</button>
                        </a>
           @php
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        @endphp
    </div>
</div>

@endsection
