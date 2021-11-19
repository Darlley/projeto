@extends('layouts.main')
@section('title', 'Editando o evento ' . $event->title)

@section('content')
    <div class="edit-event">
        <div>
            <h1>Editando {{ $event->title }}
                <ion-icon name="planet-outline"></ion-icon>
            </h1>
        </div>
        <div>
            <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="img">
                    <label for="imae">Mudar imagem do evento</label>
                    <input type="file" id="image" name="image">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                </div>
                <div>
                    <label for="title">Trocar nome</label>
                    <input type="text" id="title" name="title" placeholder="Nome" value="{{ $event->title }}">
                </div>
                <div>
                    <label for="date">Trocar data</label>
                    <input type="date" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
                </div>
                <div class="description">
                    <label for="description">Trocar descrição</label>
                    <textarea name="description" id="description" placeholder="O que vai acontecer no evento" >{{ $event->description }}</textarea>
                </div>
                <div>
                    <label for="city">Trocar local</label>
                    <input type="text" id="city" name="city" placeholder="Cidade" value="{{ $event->city }}">
                </div>
                <div>
                    <label for="private">O evento é privado?</label>
                    <select id="private" name="private">
                        <option value="0">Não</option>
                        <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                    </select>
                </div>
    
                <div class="container-itens">
                    <label>Adicione itens: </label>
                    <div>
                        <label for="items">
                            Cadeiras
                            <input type="checkbox" name="items[]" id="items" value="Cadeiras">
                        </label>
                        <label for="items">
                            Palco
                            <input type="checkbox" name="items[]" id="items" value="Palco">
                        </label>
                        <label for="items">
                            Sorteios
                            <input type="checkbox" name="items[]" id="items" value="Sorteios">
                        </label>
                        <label for="items">
                            Cerveja
                            <input type="checkbox" name="items[]" id="items" value="Cerveja" >
                        </label>
                        <label for="items">
                            Brindes
                            <input type="checkbox" name="items[]" id="items" value="Brindes">
                        </label>
                    </div>
                </div>
                <button type="submit">
                    Editar 
                    <ion-icon name="duplicate-outline"></ion-icon>
                </button>
            </form>
        </div>
    </div>
@endsection