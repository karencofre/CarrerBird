@extends('app');

@section('content')
<h2>Top 10</h2>
<div class="container">
    <div class="row">
        <@php
        $trabajadores = App\Trabajador::all();
        foreach ($trabajadores as $trabajador) {
            echo '<div class="col-md-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $trabajador["Nombre"] . '</h5>';
            echo '<p class="card-text">Cargo: ' . $trabajador["Cargo"] . '</p>';
            echo '<p class="card-text">Puntuación: ' . $trabajador["Puntuacion"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        @endphp
    </div>
</div>

@endsection
