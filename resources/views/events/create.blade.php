@extends('layouts.main')
@section('title', 'Criar evento')

@section('content')
    <div>
        <h1><ion-icon name="planet-outline"></ion-icon></h1>

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
            <input type="submit" value="Criar evento">
        </form>
    </div>
@endsection