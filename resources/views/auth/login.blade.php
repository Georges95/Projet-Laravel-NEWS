@extends('auth.auth-layout')
@section('title', "Page de connexion")

@section('auth-form')

    <h1>Connexion</h1>
        <p class="account-subtitle">Acceder au dashboard</p>

			<form action="{{route('login')}}" method="POST">
                @csrf

                <div class="form-group">
					<input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                        <p class="text-red-500 mt-2" >{{$message}}</p>
                    @enderror
                </div>


				<div class="form-group">
					<input class="form-control" type="password" name="password"  placeholder="Mot de passe">
                    @error('password')
                        <p class="text-red-500 mt-2" >{{$message}}</p>
                    @enderror
                </div>

				<div class="form-group">
					<button class="btn btn-primary btn-block" type="submit">Se connecter</button>
				</div>

			</form>

			<div class="text-center forgotpass"><a href="{{route('password.request')}}">Mot de passe oublié ?</a></div>

            <div class="text-center dont-have">Vous n'avez de compte? <a href="{{route('register')}}">S'inscrire</a> </div>
@endsection
