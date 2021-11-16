@extends('layouts.main')
@section('title', 'Larapp')
@section('content')
    <div>
        <h1>Larapp</h1>
        @if (!!$nome)
            <ul>
                <li><a href="/">{{ $nome }}</a></li>
                <li><a href="/about">Sobre</a></li>
                <li class="login"><a href="/">Login</a></li>
            </ul>
        @endif
    </div>
    <div>
        {{-- comentário em Blade --}}

        <ul>
            
        </ul>
    </div>
@endsection


