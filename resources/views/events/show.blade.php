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
                <p><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
                <p>{{ $event->date }} - {{ $event->time }}</p>
                <p><ion-icon name="person-outline"></ion-icon> Gestor</p>
                <a href="#"><ion-icon name="log-in-outline"></ion-icon>Participar</a>
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