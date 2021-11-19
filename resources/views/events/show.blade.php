@extends('layouts.main')
@section('title', $event->title)

@section('content')
    <div class="evento-page">
        <div>
            <div>
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <h1>{{ $event->title }}</h1>
                <p>{{ date('d/m/Y', strtotime($event->date)) }} - <ion-icon name="planet-outline"></ion-icon> {{ $event->city }}</p>
                <p><span class="{{ $event->private == 0 ? 'evento-public' : 'evento-private' }}"><ion-icon name="{{ $event->private == 0 ? 'balloon-outline' : 'card-outline' }}"></ion-icon> Evento {{ $event->private == 0 ? 'público' : 'privado' }}</span></p>
                <p>Criador: {{ $eventOwner['name'] }}</p>
            </div>
            <div>
                <h2>Sobre o Evento <ion-icon name="chatbubble-ellipses-outline"></ion-icon></h2>
                <p>{{ $event->description }}</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est cum amet similique non nemo, sed optio ut nisi nihil debitis aperiam laudantium rem. In, modi! Voluptates velit nulla labore magnam.</p>
                @if($event->items)
                <h3>O evento conta com:</h3>
                <ul>
                    @foreach($event->items as $item)
                    <li>{{ $item }} <ion-icon name="{{$item=='Cadeiras' ? 'thumbs-up-outline' : ''}}{{$item=='Palco' ? 'tv-outline' : ''}}{{$item=='Sorteios' ? 'funnel-outline' : ''}}{{$item=='Cerveja' ? 'beer-outline' : ''}}{{$item=='Brindes' ? 'heart-circle-outline' : ''}}"></ion-icon></li>
                    @endforeach
                </ul>
                @endif

                <div class="evento-presense">
                    <form class="confirmar-evento" action="/events/join/{{ $event->id }}" method="post">
                        @csrf
                        <a class="confirmar-evento-link" href="/events/join/{{ $event->id }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                        >Participar do evento</a>
                    </form>
                    <p>{{ count($event->users) }} participantes</p>
                </div>
            </div>
        </div>
    </div>
@endsection