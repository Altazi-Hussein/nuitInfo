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
                <div class="card-header">Ajouter un article</div>
                    <div class="d-flex row justify-content-center">
                    <form class="w-75"action="{{ action('ArticleController@store') }}" method="post">
                        @csrf
                        <label for="title">Nom de l'article</label><input class="form-control" type="text" name="title" id="title">
                        <label for="content">Contenu de l'article</label><textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        <input class="mt-3 mb-3 btn btn-success form-control" type="submit" value="Créer l'article">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection