@extends('layouts.main')
@section('title', 'Dashboard')
    

@section('content')

<div class="myEvents">
    <h1>Meus Eventos</h1>
</div>
<div class="dashboardEvents">
    @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Participantes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td>
                            <a href="/events/edit/{{ $event->id }}">Editar</a>
                            <form action="/events/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum evento criado ainda.</p>
    @endif
</div>
<div class="myEvents">
    <h1>Eventos que participarei</h1>
</div>
<div class="dashboardEvents">
    @if(count($eventsasparticipant) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Participantes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventsasparticipant as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td>
                            <form action="/events/leave/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Desistir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhuma participação confirmada ainda.</p>
    @endif
</div>
@endsection