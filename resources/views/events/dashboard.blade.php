@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    @if(count($events) > 0)
    <h1>Eventos que cadastrei :)</h1>
    <div>
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
                    <td>{{ count($event->users) }}</td>
                    <td>
                        <a href="events/edit/{{ $event->id }}"><ion-icon name="pencil-outline"></ion-icon></a>
                        <form action="/events/{{ $event->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <a href="#"><ion-icon name="trash-outline"></ion-icon></a>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h1>Não tenho nenhum evento cadastrado :/</h1>
    <p>Que tal criar algum evento? <a href="/events/create">Criar</a></p>
    @endif

    @if(count($eventsasparticipant) > 0)
    <h1>Eventos que estou participando</h1>
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
                    @foreach($eventsasparticipant as $event)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td>
                            <form action="/events/leave/{{ $event->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <ion-icon name="close-outline"></ion-icon> Sair do evento
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <p>Que tal criar algum evento? <a href="/events/create">Criar</a></p>
        @endif
    </div>
    @else
    <h1>Não estou participando de nenhum evento :/</h2>
    @endif
@endsection