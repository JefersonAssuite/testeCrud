@extends('layout.main')
@section('title','Cadastro')
@section('content')



<form action="/events" method="POST">

    @csrf
    <label>Digite o nome da Fruta:</label>
    <input type="text" id="nome" name="nome">
    </br></br>

    <label>Digite a Cor da Fruta:</label>
    <input type="text" id="cor" name="cor">
    </br></br>

    <label>Digite o Sabor da Fruta:</label>
    <input type="text" id="sabor" name="sabor">
    </br></br>

    <input type="submit" value="Enviar">
    </br></br>

</form>

<a href="/"><button>Retornar ao Inicio</button></a>

@endsection