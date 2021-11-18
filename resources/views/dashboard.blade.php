@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div>
        @if(count($events) > 0)
            
        @else
        <p>Que tal criar algum evento? <a href="/events/create">Criar</a></p>
        @endif
    </div>
@endsection