@extends('layouts.main')

@if($id == 1)
    @section('title', 'Redes sociais')
@endif

@section('content')
    <div class="content-container">

        <p>ID do link: {{ $id }}</p>
        <div><a href="#" target="_blank">Facebook</a></div>
        <div><a href="#" target="_blank">Instagram</a></div>
    </div>
@endsection