@extends ('layouts.main')

@section('title', 'HDC Events')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento">
    </form>
</div>
@foreach($event as $event)
    <div class="card col-md-3">
    <p>{{$event -> title}}</p>
    <p>{{$event -> description}}</p>
    <p>{{$event -> city}}</p>
    @if($event->private)
        <p>Evento privado</p>
    @else
        <p>Evento aberto</p>
    @endif
    </div>
@endforeach
@if(count($events) === 0 && $search)
    <p>Não foi possível encontrar nenhum evento com {{$search}}! <a href="/">Ver todos</a></p>
@elseif(count($events) === 0)
    <p>Não há eventos disponíveis</p>
@endif

@endsection