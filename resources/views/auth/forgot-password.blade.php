@extends( 'welcome')
@section('title', 'Home')
@section('contenido')
    <div class="row  justify-content-center align-items-center vh-100">
        <div class="col-sm-8">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <img src="{{ asset('images/logo.png') }}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 row">
                    <div class="text-gray-600">
                      <label>¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.</label>
                    </div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                aria-describedby="emailHelp" placeholder="Ingresar email" required autofocus />
                        </div>
                        <div class="form-row text-center">
                            <div class="col-12">
                                <input type="submit" value="Restablecer password" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
