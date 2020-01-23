@extends('plantilla')

@section('seccion')
<h1>Detalle de mota: </h1>
<h4>Id: {{$mota->id}}</h4>
<h4>Nombre: {{$mota->nombre}}</h4>
<h4>Detalle: {{$mota->descripcion}}</h4>

@endsection