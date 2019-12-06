@extends('layouts.app')


@section('content')
@if ($errors->any())
    <div class="error">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Auth::check())
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Affichage de l'articles</div>
                <div class="card-body">
                    <div class="">
                    <h3>{{$article->title}}</h3>
                    <p class="m-0">{{$article->user->name}}</p>
                    <p>Publié le {{$article->created_at}}</p>
                    <p class="text-justify m-5" style="text-indent:20%;">{{$article->content}}</p>
                    <a class="btn btn-primary" href="{{ url('article') }}">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
            <div class="card-body">
            <form action="{{ action('CommentaireController@store') }}" method="post">
                @csrf
                <label for="content">Votre commentaire</label>
                <textarea class="form-control" name="contenu" id="content"></textarea>
                <input type="hidden" value="{{$article->id}}" name="article_id">
                <input class="mt-3 btn btn-success form-control" type="submit" value="Publier l'article">
           </form>
        </div>
        </div>

           @foreach ($commentaires as $comment)
                <div class="card mt-2">
                    <div class="card-body">
                    <h5>{{$comment->user->name}}</h5>
                    <p>{{$comment->created_at}}</p>
                    <p>{{$comment->contenu}}</p>
                    </div>
                </div>
           @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection