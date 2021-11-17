@extends('layouts.main')
@section('title', 'Links')

@section('content')
    <div class="content-container">
        @if($busca != "")
            <p>Buscando por: {{ $busca }}</p>
        @endif
        <div><a href="/contents/socials">Ir para redes sociais</a></div>
        <div><a href="/contents/articles">Ir para artigos</a></div>
    </div>
@endsection