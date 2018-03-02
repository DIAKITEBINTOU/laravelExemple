{{--

@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<h1>Creation d'un canard</h1>
{{ Form::open(['url' => 'foo/bar']) }}

<div class="form-group">
{{ Form::label('name', 'Nom du canard') }}
{{ Form::text('name','', ['class' => 'awesome', 'required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('weigth', 'Poids du canard') }}
{{ Form::number('weigth') }}
</div>

<div class="form-group">
{{ Form::label('taille', 'Taille du canard') }}
{{ Form::number('size') }}
</div>

<div>
{{ Form::submit('Inserer le canard') }}
</div>

{{ Form::close() }}
@endsection

--}}



@extends('layouts.base')
@section('title', 'Ajouter un livre ')
@section('content')
<h1>Update</h1>
{{ Form::open(['url' =>'/update']) }}

<div class="form-group">
{{ Form::label('title', 'Nom du livre') }}
{{ Form::text('title', 'Ceci est un livre', ['required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('author', 'Auteur') }}
{{ Form::text('author', 'Ecrit par un auteur', ['required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('excerpt', 'resumé') }}
{{ Form::text('excerpt', 'Qui se passe dans un monde', ['required' => 'required']) }}
</div>

<div class="form-group">
{{ Form::label('genre', 'Genre') }}
{{ Form::text('genre', $genres, ['required' => 'required']) }}
</div>

@foreach ($translations as $translation)
    <div class="from-groupe">
    {{ Form::label('genre', 'Genre') }}
    {{ Form::text('genre', $genres, ['required' => 'required']) }}
    </div>

@foreach

{{ Form::submit('Créer') }}
{{ Form::close() }}
@endsection


                        