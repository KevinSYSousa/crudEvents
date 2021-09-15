@extends('layouts.main')
@section('title', 'Dashboard')
    

@section('content')

<div class="myEvents">
    <h1>Meus Eventos</h1>
</div>
<div class="dashboardEvents">
    @if (count($events) > 0)
        <h5>{{ $event->title }}</h5>
    @else
        <p>Nenhum evento criado ainda.</p>
    @endif
</div>

@endsection