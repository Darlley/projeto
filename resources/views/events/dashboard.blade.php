@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div>
        @if(count($events) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>Participantes</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>-</td>
                        <td>
                            <a href="#"><ion-icon name="close-outline"></ion-icon></a>
                            <a href="#"><ion-icon name="pencil-outline"></ion-icon></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>-</td>
                        <td>
                            Eventos
                        </td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tfoot>
            </table>
        @else
        <p>Que tal criar algum evento? <a href="/events/create">Criar</a></p>
        @endif
    </div>
@endsection