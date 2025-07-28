@extends('layouts.main')

@section('title', '$event->title')

@section('content')
    <div id="event-show-container" class="col-md-10 offset-md-1">
        <div class="row">
            <div id="event-image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
                <div id="description-container">
                    <h3>Sobre o evento:</h3>
                    <p class="event-description">{{ $event->description }}</p>
                </div>
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
                <p class="evets-participants"><ion-icon name="people-outline"></ion-icon> X Participantes</p>
                <p class="evets-owner"><ion-icon name="star-outline"></ion-icon>{{ $eventOwner['name'] }}</p>

                @if($event->private)
                    <p class="event-private">Este é um evento privado.</p>
                @else
                    <p class="event-public">Este evento é aberto ao público.</p>
                @endif
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
                <a href="/" class="btn btn-secondary">Voltar</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="checkmark-circle-outline"></ion-icon>{{ $item }}</li>
                    @endforeach
            </div>
        </div>
    </div>
@endsection 