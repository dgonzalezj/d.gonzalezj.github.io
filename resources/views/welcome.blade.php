@extends ('plantilla')

@section('seccion')
  <h1>Motas</h1>
   @if (Session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje')}}
    </div>
   @endif
    <form action="{{route('motas.crear')}}" method="POST">
      @csrf

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

      <input type="text" name="nombre"  placeholder="Nombre :" value="{{ old('nombre')}}"  class="form-control mb-2 ">
      <input type="text" name="descripcion" placeholder="Descripcion :" value="{{ old('descripcion')}}" class="form-control mb-2 ">
      <button class="btn btn-primary btn-block" type="submit">Agregar </button>
    </form> 
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($motas as $item)
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
                <a href="{{ route('motas.detalle',$item)}}">
                {{$item->nombre}}
                </a>
            </td>
            <td>{{$item->descripcion}}</td>
            <td>
              <a href="{{ route('motas.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>

              <form action="{{ route('motas.eliminar', $item) }}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
              </form>
            </td>
            </tr>
        @endforeach()
    </tbody>
    </table>

    {{ $motas->links() }}
@endsection