@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-default">Retour</a>
    <h1>Editer un article</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id],'methode' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form']) !!}
        <div class="form-group">
                {{Form::label('title', 'Titre de l\'article')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre de l\'article'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        <div class="form-group">
                {{Form::label('body', 'Corps du texte')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Corps de l\'article'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>

        {!! Form::submit('Valider', ['class' => 'btn btn-default'])!!}
        {!! Form::close() !!}

@endsection