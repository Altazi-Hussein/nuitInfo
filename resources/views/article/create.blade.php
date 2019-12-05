@extends('app.layout')

<form action="{{ action('ArticleController@store') }}" method="post">
    @csrf
    <label><input type="text" name="title" id="title"> Nom de l'article</label>
    <label><textarea name="contenu" id="contenu" cols="30" rows="10"></textarea></label>
    <label><input type="button" value=""></label>
</form>