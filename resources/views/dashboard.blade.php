@extends('layout.main')
@section('title','Dashboard')
@section('content')

<div class="col-md-10  offset-md-1 dashboard-title-container">
    <h1>Frutas Cadastradas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-frutas-container">
    @if(count($frutas)>0)
    
    @else
    <p>Voce ainda Não cadastrou nenhuma Frutas <a href="/events/create">Cadastrar Frutas</a></p>
    @endif
</div>


@endsection