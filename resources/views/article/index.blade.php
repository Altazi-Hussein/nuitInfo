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

                    @foreach ($articles as $article)
                    <div class="card" style="width: 50rem;">
                            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                            <span class="glyphicon glyphicon-nom-image"></span>

                            <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$str::words($article->content,10)}}</p>
                              <a href="#" class="btn btn-primary">Lire l'article</a>
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