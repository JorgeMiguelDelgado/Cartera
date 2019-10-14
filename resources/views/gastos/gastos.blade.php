@extends('layout.layout')

@section('title', 'gastos')

@section('ntitle', 'Control de Gastos')

@section('content')
    <h2>Lista de gastos
    </h2>
    <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="/gastos/create">Nuevo Gasto</a></button>
    <div class="container"><br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad de dinero</th>
                <th scope="col">Fecha de Gasto</th>
            </tr>
        </thead>
        <tbody>
        
    @foreach($gastos as $gasto)
            <tr>
            <th scope="row">{{$gasto->id}}</th>
                <td>{{$gasto->descripcion}}</td>
                <td>{{$gasto->monto}}</td>
                <td>{{$gasto->fecha}}</td>
            </tr>
           
    @endforeach
        </tbody>
    </table>
    
    </div>
@endsection