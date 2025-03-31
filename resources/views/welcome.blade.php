@extends ('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $event)
    <p>{{$events -> title}}</p>
    <p>{{$events -> description}}</p>
    <p>{{$events -> city}}</p>
    @if($event->private)
        <p>Evento privado</p>
    @else
        <p>Evento aberto</p>
    @endif
@endforeach

@endsection