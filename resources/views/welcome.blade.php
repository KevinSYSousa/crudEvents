@extends('layouts.main')
@section('title', 'Home')
    

@section('content')
<div class="title">
        <h1>Bem Vindo</h1>
        <h3>Busque um evento:</h3>
        <form action="">
                <input type="text" placeholder="Procurar...">
        </form>
</div>
<div class="bodyContainer">
        <h3>Próximos eventos</h3>
        <p>Eventos futuros</p>
        <div class="container">
                @foreach ($events as $event)
                <div class="events">
                        <h5>{{ $event->title}}</h5>
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}"><br>
                        <p>{{ $event->date}} Horário: {{ $event->time}}</p>
                        <a href="/events/{{ $event->id }}">Leia sobre</a>
                </div>
                @endforeach
        </div>
</div>
@endsection