@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    
<div id="search-container" class="col-md-12">
    <h1>Buscar evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquise nome de um evento">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos poximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card-col-md-3">
            <img src="/img/bannersa.jpeg" alt="{{$event->title}}">
            <div class="card-body">
                <div class="card-date">10/09/2025</div>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
        @endforeach
</div>
        
@endsection
