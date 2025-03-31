@extends('layouts.main')

@section('title', 'produtos')

@section('content')

<h1>Está é a página de produtos</h1>
@if($busca != null)
    <p>Foi pesquisado {{$busca}}</p>
@endif
<a href="/">Voltar para home</a>

@endsection