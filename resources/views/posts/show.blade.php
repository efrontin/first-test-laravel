@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary">Retour</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
        <p>{!!$post->body!!}</p>        
        <hr>
        
        <small>Publié le {{$post->created_at}} par {{$post->user->name}}</small>

        <hr>
    @if(!Auth::guest())

        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Editer</a>  
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection