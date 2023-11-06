@extends('app');

@section('content')
<h2 class="text-center">Top 10</h2>
<div class="container">
    <div class="row">
        @php
        use App\Models\Trabajador;
        $trabajadores = Trabajador::all();
        foreach ($trabajadores as $trabajador) {
            echo '<div class="col-md-4">';
            echo '<div class="card my-2">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $trabajador["nombre"] . '</h5>';
            echo '<p class="card-text">Cargo: ' . $trabajador["cargo"] . '</p>';
            echo '<p class="card-text">Puntuación: ' . $trabajador["puntuacion"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        @endphp
    </div>
</div>

@endsection
