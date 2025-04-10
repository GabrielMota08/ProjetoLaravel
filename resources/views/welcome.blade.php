@extends ('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($event as $event)
    <p>{{$event -> title}}</p>
    <p>{{$event -> description}}</p>
    <p>{{$event -> city}}</p>
    @if($event->private)
        <p>Evento privado</p>
    @else
        <p>Evento aberto</p>
    @endif
@endforeach
@if(count($event) === 0)
    <p>Não há eventos disponíveis</p>
@endif

@endsection