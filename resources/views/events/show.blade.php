@extends('layouts.main')

@section('title', '$event->title')

@section('content')
<div id="event-show-container" class="col-md-6 offset-md-3">
    <h1>{{ $event->title }}</h1>
    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
    <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
    <p class="event-description">{{ $event->description }}</p>
    
    @if($event->private)
        <p class="event-private">Este é um evento privado.</p>
    @else
        <p class="event-public">Este evento é aberto ao público.</p>
    @endif

    <a href="/" class="btn btn-secondary">Voltar</a>
</div>
@endsection