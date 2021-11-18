@extends('layouts.main')
@section('title', 'Larapp')

@section('content')
    <div>
        {{-- comentário em Blade --}}

        <div class="container-home">
            <div id="search-container">
                <h1>Buscar eventos</h1>
                <form action="">
                    <input type="text" name="search" id="search" placeholder="Buscar eventos">
                </form>
            </div>
            <div id="event-container">
                @if(count($events) > 0)
                    <h2>Eventos cadastrados</h2>
                    <ul class="eventos">
                        @foreach($events as $event)
                        <li>
                            <a href="/events/{{ $event->id }}">
                                {{ $event->title }} -- {{ $event->description }}
                                @if($event->image)
                                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                                @endif
                            </a>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <h2>Não há eventos!</h2>
                @endif
            </div>
        </div>
    </div>
@endsection