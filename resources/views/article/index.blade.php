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
       {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un article</div> --}}
                {{-- <form class="d-flex" action="{{ action('ArticleController@index')}}" method="GET">
                    <select class="form-control w-25" name="select">
                        <option value="title">Titre</option>
                        <option value="date">Date (récent -> ancien)</option>
                    </select>
                    <input class="btn btn-primary" type="submit" value="Valider">
                </form> --}}
                <a href="{{url('home')}}" class="btn btn-primary float-right">Accueil</a>
                    <br>
                    @foreach ($articles as $article)
                    <div class="card" style="width: 50rem;">
                            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                            <span class="glyphicon glyphicon-nom-image"></span>
                            
                                {{ csrf_field() }}
                            <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="float-right">Créé le {{$article->created_at}}</p>
                            <p class="card-text">{{$str::words($article->content,10)}}</p>
                            <a href="article/{{$article->id}}/upvote"> + </a>
                            <p> {{$article->getScore()}}
                            <a href="article/{{$article->id}}/downvote"> - </a>
                            
                        
                            <a href="" class="btn btn-primary float-right">Lire l'article</a>
                            <a href="{{ url('article')}}/{{$article->id}}" class="btn btn-primary float-right">Lire l'article</a>
                        </div>
                          </div><br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection