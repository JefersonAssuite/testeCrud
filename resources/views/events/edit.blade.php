@extends('layout.main')
@section('title','Editando Dados')
@section('content')

<form action="/events/update/{{$fruta->id}}" method="POST">

    @csrf
    @method('PUT')
    <label>Digite o nome da Fruta:</label>
    <input type="text" id="nome" name="nome" value="{{$fruta->nome}}">
    </br></br>

    <label>Digite a Cor da Fruta:</label>
    <input type="text" id="cor" name="cor" value="{{$fruta->cor}}">
    </br></br>

    <label>Digite o Sabor da Fruta:</label>
    <input type="text" id="sabor" name="sabor" value="{{$fruta->sabor}}">
    </br></br>

    <input type="submit" value="Enviar">
    </br></br>

</form>
<a href="/"><button>Retornar ao Inicio</button></a>


@endsection