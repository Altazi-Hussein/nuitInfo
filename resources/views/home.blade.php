@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary form-control mt-2 mb-2" href="{{ url('article/create') }}">Ajouter un article</a>
                    <a href="{{url('article')}}" class="btn btn-success form-control mt-2 mb-2">Accéder aux articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
