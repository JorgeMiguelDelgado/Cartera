@extends('layout.layout')
@section('title','Ingresos')
@section('ntitle','Administrar ingresos')

@section('content')
<h1>Ingresos a la cartera

        <small class="text-muted">Ingresos</small></h1>
    
    <button type="button" class="btn btn-outline-primary"><a class="nav-link" href="/ingresos/create">Nuevo Ingreso</a></button>
    <div class="container"><br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingresos as $ingreso)
            <tr>
            <th scope="row">{{$ingreso->id}}</th>
                <td>{{$ingreso->descripcion}}</td>
                <td>{{$ingreso->monto}}</td>
                <td>{{$ingreso->fecha}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
    </div>

@endsection