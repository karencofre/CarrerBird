@extends('app');

@section('content')
<h2>Postulantes</h2>
<div class="container mt-5 mb-5">
    <div class="row">
        <@php

            $trabajadores = App\Trabajador::all();
            foreach ($trabajadores as $objeto) {
            echo '<div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $objeto["nombre"] . '</h5>
                            <p class="card-text">Renta: $' . $objeto["renta"] . '</p>
                        </div>
                    </div>
                </div>';
        }
        ?>
        @endphp
    </div>
</div>
@endsection
