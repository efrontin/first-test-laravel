@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the Laravel App from the Laravel from scratch youtube series</p>
        <p><a href="/login" class="btn btn-primary btn-lg" role="button">Connexion</a> <a class="btn btn-success btn-lg" href="/register" role="button">S'enregistrer</a></p>
    </div>
@endsection
        