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
                    <form method="POST" class="border p-3 form" action="{{ route('login') }}">
                        @csrf
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
                                autocomplete="current-password" placeholder="Password" />
                        </div>
                        <!-- Remember Me -->
                        <div class="form-check">
                            <label for="remember_me" class="form-check-input">
                                <input id="remember_me" type="checkbox" class="form-check-label" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                            </label>
                        </div>
                        <br>
                        <div class="form-row text-center">
                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                                <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
