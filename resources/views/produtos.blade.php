@extends('layouts.main')
@section('title', 'Produtos')
@section('content')
<h1>Pagina de Produtos</h1>
<a href="/">Retornar para Home</a>

@if($busca != '')
    <p>O usuário esta buscando por: {{$busca}}</p>
@endif
@endsection