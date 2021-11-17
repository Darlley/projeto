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
                <h2>Eventos cadastrados</h2>
                @if($events)
                <ul class="eventos">
                    @foreach($events as $event)
                    <li>
                        <a href="#">
                            {{ $event->title }} -- {{ $event->description }}
                            @if($event->image)
                                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                            @endif
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
@endsection