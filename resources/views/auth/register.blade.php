@extends( 'welcome')
@section('title', 'Home')
@section('contenido')
    <div class="row  justify-content-center align-items-center vh-100">
        <div class="col-sm-12">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <img src="{{ asset('images/logo.png') }}" class="mx-auto d-block">
                </div>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="col-sm-4 row">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                               size="50px" placeholder="Nombre Completo" required autofocus />
                        </div>
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                aria-describedby="emailHelp" placeholder="Ingresar email" required autofocus />
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Password</label>
                            <input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <div class="col-12">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}">
                                    {{ __('¿Ya registrado?') }}
                                </a>
                                <input type="submit" value="Registrarse" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
