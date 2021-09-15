@extends('layouts.main')
@section('title', 'Editando: ' . $event->title)
    

@section('content')
    <div class="createEvents">
        <h1>Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="eventsGroup">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="eventsCard" name="image">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title}}" class="img-preview">
        </div>
        <div class="eventsGroup">
        <label for="title">Evento: </label>
        <input type="text" class="eventsCard" name="title" placeholder="Nome do evento" value="{{ $event->title }}" required>
        </div>
        <div class="eventsGroup">
        <label for="title">Cidade: </label>
        <input type="text" class="eventsCard" name="city" placeholder="Cidade do evento" value="{{ $event->city }}">
        </div>
        <div class="eventsGroup">
        <label for="title">Data: </label>
        <input type="date" class="eventsCard" name="date" placeholder="Data do evento" value="{{ $event->date->format('Y-m-d') }}" required>
        </div>
        <div class="eventsGroup">
                <label for="title">Horário: </label>
                <input type="time" class="eventsCard" name="time" placeholder="Horário do evento" value="{{ $event->time }}" required>
        </div>
        <div class="eventsGroup">
                <label for="title">Descrição: </label>
                <textarea name="description" id="" class="eventsCard" placeholder="Descreva o evento" required>{{ $event->description }}</textarea>
        </div>
        <div class="eventsGroup">
                <label for="title">Evento privado: </label>
                <select name="private" id="eventPrivate" class="eventsCard">
                        <option value="0">Não</option>
                        <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
                </select>
        </div>
        <div class="eventsGroup">
                <label for="title">Item do evento:</label>
                <div class="selectItems">
                        <input type="checkbox" name="items[]" value="Iniciante"> Iniciante
                </div>
                <div class="selectItems">
                        <input type="checkbox" name="items[]" value="Intermediário"> Intermediário
                </div>
                <div class="selectItems">
                        <input type="checkbox" name="items[]" value="Avançado"> Avançado
                </div>
                <div class="selectItems">
                        <input type="checkbox" name="items[]" value="Baby"> Baby
                </div>
        </div>
        <input type="submit" class="sendEvent" value="Salvar">
        </form>
    </div>
@endsection