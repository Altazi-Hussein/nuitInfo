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
        <div class="col-md-8">0
            <div class="card">
                <div class="card-header">Modifier mes données</div>
                    <div class="d-flex row justify-content-center">
                    <form class="w-75" action="{{ action('UserController@update', ['id' => $user->id])}}" method="post">
                        @csrf
                        <label class="mt-2" for="name">Nom</label><input class="form-control" type="text" value="{{$user->name}}" name="name" id="name">
                        <label class="mt-2" for="email">Adresse mail</label><input type="email" class="form-control" name="email" value={{$user->email}} id="email">
                        <label class="mt-2" for="bourse">Montant mensuel bourse</label>
                        <select class="form-control" name="bourse" id="bourse">
                            <option value="0">102</option>
                            <option value="1">168,70</option>
                            <option value="2">254,10</option>
                            <option value="3">325,30</option>
                            <option value="4">396,70</option>
                            <option value="5">455,50</option>
                            <option value="6">483,10</option>
                            <option value="7">561,20</option>
                        </select>
                        <label class="mt-2" for="region">
                            Région</label>
                        <input class="form-control"type="text" name="region">
                        <label class="mt-2" for="date">
                            Date de naissance</label>
                        <input class="form-control" type="date" name="date">
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