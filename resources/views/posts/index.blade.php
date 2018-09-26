@extends('layouts.app')

@section('content')

    <h1>Blog</h1>

        @if (count($posts) > 0)
            @foreach ($posts as $post)
               <div class="card card-lg">
                   <div class="row">
                       <div class="col-md-4 col-sm-4">
                       <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                       </div>
                       <div class="col-md-8 col-sm-8">
                            <h3 class="list-group-item"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Publié le {{$post->created_at}} par {{$post->user->name}}</small>
                        </div>
                    </div>
               </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>Il n'y a pas d'articles</p>
        @endif
@endsection
