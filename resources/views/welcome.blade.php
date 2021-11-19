@extends('layouts.main')
@section('title', 'Larapp')

@section('content')
    <div>
        {{-- comentário em Blade --}}

        <div class="container-home">
            <div id="search-container">
                <h1>Buscar eventos</h1>
                <form action="">
                    <input type="text" name="search" id="search" placeholder="Buscar eventos" method="GET" action="/">
                </form>
            </div>
            <div id="event-container">
                @if($search)
                    <h2>Buscando por {{ $search }}</h2>
                @else
                    <h2>Eventos cadastrados</h2>
                @endif

                @if(count($events) > 0)
                    <ul class="eventos">
                        @foreach($events as $event)
                        <li>
                            <a class="home-welcome-img" href="/events/{{ $event->id }}">
                                {{ $event->title }} -- {{ $event->description }}
                                @if($event->image)
                                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                                @endif
                                <p>{{ count($event->users) }} participantes</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                @elseif(count($events) == 0 && $search)
                    <h2>Não foi possível encontrar eventos {{ $search }}.</h2>
                    <p><a href="/">Ver todos</a></p>
                @else
                    <h2>Não há eventos!</h2>
                @endif
            </div>
        </div>
    </div>
@endsection