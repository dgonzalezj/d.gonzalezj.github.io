@extends ('plantilla')

@section ('seccion')
    <h1>Este es mi equipo de trabajo:</h1>

    @foreach($equipo as $item)
        <a href="{{ route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a> </br>
    @endforeach

    @if (!empty($nombre))
        
        @switch($nombre)
            @case($nombre=='Seba')
                <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            @break

            @case($nombre=='Diego')
                <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            @break

            @case($nombre=='Juanito')
                <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Duis vitae quam sed felis imperdiet tempus. Fusce non suscipit tortor,
                quis bibendum justo. Ut imperdiet tempor felis. Curabitur pretium,
                dolor vel sodales imperdiet, nisl ligula porttitor nisl, non fin
                Suspendisse sodales vehicula nisi, non efficitur leo congue posuere.</p>
            @break
        @endswitch
    @endif
@endsection