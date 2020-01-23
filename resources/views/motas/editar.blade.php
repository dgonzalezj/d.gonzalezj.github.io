@extends('plantilla')

@section('seccion')
<h1>Editar mota {{$mota->id}}</h1>
    <form action="{{route('motas.update',$mota->id)}}" method="POST">
      @method('PUT')  
      @csrf
      @if (Session('mensaje'))
        <div class="alert alert-success">
        {{ session('mensaje')}}
         </div>
      @endif  

      @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
      @enderror

      @error('descripcion')
        <div class="alert alert-danger">
            La descripcion es obligatoria
        </div>
      @enderror

      <input type="text" name="nombre"  placeholder="Nombre :" value="{{ $mota->nombre}}"  class="form-control mb-2 ">

      <input type="text" name="descripcion" placeholder="Descripcion :" value="{{ $mota->descripcion}}" class="form-control mb-2 ">

      <button class="btn btn-warning btn-block" type="submit">Editar </button>
    </form> 
@endsection