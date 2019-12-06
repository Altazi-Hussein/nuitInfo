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
                <div class="card-header">Modifier mes données</div>
                    <div class="d-flex row justify-content-center">
                    <form class="w-75" action="{{ action('UserController@update', ['id' => $user->id])}}" method="post">
                        @csrf
                        <label for="name">Nom</label><input class="form-control" type="text" name="name" id="name">
                        <label for="content">Contenu de l'article</label><textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        <input class="mt-3 mb-3 btn btn-success form-control" type="submit" value="Créer l'article">
                    </form>
                    </div>
                    <a class="btn btn-primary" href="{{ url('article') }}">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection