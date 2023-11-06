@extends('app');
@section('content')




<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Registrarse</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf
                        @if (session('success'))
                        <h2 class="alert alert-success ">
                            {{ session('success') }}
                        </h2>

                        @endif
                        @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>

                        @enderror
                        @csrf
                        <div class="form-group">
                            <label for="id_trabajador">Id Trbajador</label>
                            <input type="text" class="form-control" id="id_trabajador" name="id_trababajdor" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                       <div class="container">
                        <div class="row">
                            <button type="submit" class="btn btn-primary col-md-12 my-2">Register</button>
                            <a href="{{route('login')}}" class="col-md-12 text-center">Regresar a Login</a>
                        </div>
                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
