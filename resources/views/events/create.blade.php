@extends('layouts.main')
@section('title', 'Create Event')
    

@section('content')
        <div class="createEvents">
                <h1>Crie um evento</h1>
                <form action="/events" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="eventsGroup">
                        <label for="image">Imagem do Evento:</label>
                        <input type="file" class="eventsCard" name="image">
                </div>
                <div class="eventsGroup">
                   <label for="title">Evento: </label>
                   <input type="text" class="eventsCard" name="title" placeholder="Nome do evento" required>
                </div>
                <div class="eventsGroup">
                   <label for="title">Cidade: </label>
                   <input type="text" class="eventsCard" name="city" placeholder="Cidade do evento">
                </div>
                <div class="eventsGroup">
                   <label for="title">Data: </label>
                   <input type="date" class="eventsCard" name="date" placeholder="Data do evento" required>
                </div>
                <div class="eventsGroup">
                        <label for="title">Horário: </label>
                        <input type="time" class="eventsCard" name="time" placeholder="Horário do evento" required>
                </div>
                <div class="eventsGroup">
                        <label for="title">Descrição: </label>
                        <textarea name="description" id="" class="eventsCard" placeholder="Descreva o evento" required></textarea>
                </div>
                <div class="eventsGroup">
                        <label for="title">Evento privado: </label>
                        <select name="private" id="eventPrivate" class="eventsCard">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
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
                <input type="submit" class="sendEvent" value="Criar Evento">
                </form>
        </div>
@endsection