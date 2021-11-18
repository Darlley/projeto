@extends('layouts.main')
@section('title', 'Criar evento')

@section('content')
    <div class="new-event">
        <div>
            <h1><ion-icon name="planet-outline"></ion-icon></h1>
        </div>
        <div>
            <form action="/events/" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="imae">Imagem do evento</label>
                    <input type="file" id="image" name="image">
                </div>
                <div>
                    <label for="title">Nome do evento</label>
                    <input type="text" id="title" name="title" placeholder="Nome">
                </div>
                <div>
                    <label for="date">Data do evento</label>
                    <input type="date" id="date" name="date">
                </div>
                <div>
                    <label for="description">Descrição do evento</label>
                    <textarea name="description" id="description" placeholder="O que vai acontecer no evento"></textarea>
                </div>
                <div>
                    <label for="city">Local do evento</label>
                    <input type="text" id="city" name="city" placeholder="Cidade">
                </div>
                <div>
                    <label for="private">O evento é privado?</label>
                    <select id="private" name="private">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
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
                            <input type="checkbox" name="items[]" id="items" value="Cerveja">
                        </label>
                        <label for="items">
                            Brindes
                            <input type="checkbox" name="items[]" id="items" value="Brindes">
                        </label>
                    </div>
                </div>
                <button type="submit">
                    Salvar 
                    <ion-icon name="duplicate-outline"></ion-icon>
                </button>
            </form>
        </div>
    </div>
@endsection