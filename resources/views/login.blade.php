@extends('app');
@section('content')




<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Iniciar Sesión</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Recordarme</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
