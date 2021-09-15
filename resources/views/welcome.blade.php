@extends('layouts.main')
@section('title', 'Dashboard')
    

@section('content')
<br><br>
<div class="title">
        <h1>Bem Vindo</h1>
        <h3>Busque um evento:</h3>
        <form action="/" method="GET">
                <input type="text" id="search" name="search" placeholder="Procurar...">
        </form>
</div>
<br><br><hr><br><br>
<div class="bodyContainer">
        @if ($search)
                <h2>Resultados de: {{ $search }}</h2>
        @else
                <h2>Próximos eventos</h2>
                <p>Eventos futuros</p>
        @endif
        <div class="container">
                @foreach ($events as $event)
                <div class="events">
                        <h5>{{ $event->title }}</h5>
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}"><br>
                        <p>{{ date('d/m/Y', strtotime($event->date)) }} Horário: {{ $event->time }}</p>
                        <p><ion-icon name="people-outline"></ion-icon> {{ count($event->users)}} Participantes</p>
                        <a href="/events/{{ $event->id }}">Leia sobre</a>
                </div>
                @endforeach
                @if(count($events) == 0 && $search)
                        <p>Nenhum evento "{{ $search }}" encontrado! <a href="/">Voltar</a> </p>
                @elseif(count($events) == 0)
                        <p>Sem eventos disponíveis</p>
                @endif
        </div>
</div>
<br><br>
@endsection