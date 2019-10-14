@extends('layout.layout')
@section('title','Gastos realizados')
@section('ntitle','Ingresar gasto')
@section('content')
<h1>
<small class="text-muted">Registro de Nuevo Gastos</small>
    </h1>
    <div class="container">
        <form class="form-group" method="POST" action="{{route('gasto.store')}}">
            @csrf
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" placeholder="Descripción">
                </div>
            </div>  
            <div class="form-group row">
                <label for="monto" class="col-sm-2 col-form-label">Monto:</label>
                <div class="col-sm-10">
                    <input name="monto" type="text" class="form-control" placeholder="Monto">
                </div>
            </div>  
            <div class="form-group row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input name="fecha" type="date" class="form-control" placeholder="dd/mm/aaaa">
                </div>
            </div> 
            <button type="submit" class="btn btn-outline-primary">Guardar</button> 
        </form>
    </div>
@endsection