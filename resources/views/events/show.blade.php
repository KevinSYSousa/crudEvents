@extends('layouts.main')
@section('title', $event->title)
    

@section('content')
    <div class="showEvent">
        <div class="cardShow">
            <div class="showImage"></div>
                <img src="/img/events/{{ $event->image }}" alt="Imagem do evento" style="
                border-radius: 20px;
                border: 2px solid;
                height: 300px;">
            <div class="showInfo">
                <h1>{{ $event->title }}</h1>
                <p><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
                <p><ion-icon name="calendar-outline"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p><ion-icon name="time-outline"></ion-icon> {{ $event->time }}</p>
                <p><ion-icon name="people-outline"></ion-icon> {{ count($event->users)}} Participantes</p>
                <p><ion-icon name="person-outline"></ion-icon> {{ $eventOwner['name'] }}</p>
                @if (!$hasUserJoined)
                <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/events/join/{{ $event->id }}" onclick="event.preventDefault();
                        this.closest('form').submit();"><ion-icon name="log-in-outline"></ion-icon>Participar</a>
                </form>
                @else
                    <p>Já Participando</p>
                @endif
            </div>
            <div class="showDescription">
                <h3>Informações do evento:</h3>
                <p>{{ $event->description }}</p>
                @foreach ($event->items as $item)
                <p><ion-icon name="cellular-outline"></ion-icon>  {{ $item }}</p>
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection