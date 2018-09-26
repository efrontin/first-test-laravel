@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary">Retour</a>
    <h1>Créer un article</h1>

    {!! Form::open(['action' => 'PostsController@store', 'methode' => 'POST', 'enctype' => 'multipart/form-data','class' => 'form']) !!}
        <div class="form-group">
                {{Form::label('title', 'Nom du lieu')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Nom du lieu'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Corps du texte')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corps de l\'article'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {!! Form::submit('Valider', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}

@endsection

