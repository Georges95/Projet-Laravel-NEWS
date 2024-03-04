@extends('auth.auth-layout')

@section('title', 'Page de réinitialisation du mot de passe')

@section('auth-form')
    <h1>Mot de passe oublie?</h1>

    <p class="account-subtitle">Entrer votre email pour obtenir le lien de ré-initialisation</p>

        @if (session('status'))
            <div class="alert alert-success">{{session('status')}} </div>
        @endif

        <form action="{{route('password.email')}}" method="POST">
            @csrf
			<div class="form-group">
				<input class="form-control" type="email" value="{{old('email')}}" placeholder="Email"> </div>
			<div class="form-group mb-0">
				<button class="btn btn-primary btn-block" type="submit">Recevoir le lien</button>
			</div>
		</form>
		<div class="text-center dont-have">Vous vous souvenez de votre mot de passe? <a href="login.html">Se connecter</a></div>
@endsection
