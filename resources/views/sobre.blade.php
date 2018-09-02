@extends('master')

@section('conteudo')
    <h1>Meu nome é {{ $eu['nome'] }}</h1>
    <h4>Minha idade é {{ $eu['idade'] }}</h1>
@endsection