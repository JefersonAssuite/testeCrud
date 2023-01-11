@extends('layout.main')
@section('title','Dashboard')
@section('content')

<div class="col-md-10  offset-md-1 dashboard-title-container">
    <h1>Frutas Cadastradas</h1>
</div>
<div class="col-md-10  offset-md-1 dashboard-frutas-container">
    @if(count($frutas)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cor</th>
                <th scope="col">Sabor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
       
    <tbody>
               @foreach($frutas as $fruta)
               <tr>
                <td scropt="row">{{$loop->index + 1}}</td>
                <td>{{$fruta->nome}}</td>
                <td>{{$fruta->cor}}</td>
                <td>{{$fruta->sabor}}</td>
                <td><a href="/events/edit/{{$fruta->id}}" class="btn btn-info edit-btn">Editar</a></td> 
                <td><form action="/events/{{$fruta->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                        </td>
                </tr>
                
                @endforeach
    </tbody>
    </table>

    @else
    <p>Voce ainda Não cadastrou nenhuma Frutas <a href="/events/create">Cadastrar Frutas</a></p>
    @endif
</div>


@endsection