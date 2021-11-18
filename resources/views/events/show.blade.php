@extends('layouts.main')
@section('title', $event->title)

@section('content')
    <div class="evento-page">
        <div>
            <div>
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <h1>{{ $event->title }}</h1>
                <p><ion-icon name="planet-outline"></ion-icon> {{ $event->city }} - <span class="{{ $event->private == 0 ? 'evento-public' : 'evento-private' }}"><ion-icon name="{{ $event->private == 0 ? 'balloon-outline' : 'card-outline' }}"></ion-icon> Evento {{ $event->private == 0 ? 'público' : 'privado' }}</span></p>
            </div>
            <div>
                <h2>Sobre o Evento <ion-icon name="chatbubble-ellipses-outline"></ion-icon></h2>
                <p>{{ $event->description }}</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est cum amet similique non nemo, sed optio ut nisi nihil debitis aperiam laudantium rem. In, modi! Voluptates velit nulla labore magnam.</p>
            </div>
        </div>
    </div>
@endsection