{{-- @extends('layouts.base')
@section('title', 'Accueil')
@section('main')
<h1>Accueil</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Poids</th>
            <th>Taille</th>
        </tr>
    @foreach($ducks as $duck)
    <tr>
        <td>{{ $duck['name'] }}</td>
        <td>{{ $duck['weight'] }}</td>
        <td>{{ $duck['size'] }}</td>
    </tr>
    @endforeach
    </table>
@endsection
--}}

@extends('layouts.base')
@section('title', 'Accueil')  
<h1>Accueil</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Resumé</th>
            <th>Supression</th>
            <th>Update</th>
        </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book['title'] }}</td>
        <td>{{ $book['author'] }}</td>
        <td>{{ $book['excerpt'] }}</td>
        <td>{{ $book->genre ? $book->genre->name : 'undefined'}}
        <td>{{ $book->genre->name }}</td>
        
        <td>

            {{ Form::open(['url' => '/delete']) }}
                {{ Form::hidden('id', '$book'['id']) }}
                {{ Form::submit('X') }}
            {{ Form::close() }}
        </td>
        <td>

            {{ Form::open(['url' => '/update', 'methode' => 'get']) }}
                {{ Form::hidden('id', '$book'['id']) }}
                {{ Form::submit('U') }}
            {{ Form::close() }}
        </td>
    </tr>
    @endforeach
    </table>
@endsection