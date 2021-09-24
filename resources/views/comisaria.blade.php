@extends('layouts.app2')

@section('encabezado')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <h1> {{ $comisaria->descripcion }} </h1>
    </h2>
@endsection

@section('contenido')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div>
                    <ol class='list-decimal'>
                        @foreach($listado as $mensaje)
                            <li>{{ $mensaje->accion_patrulla }} </li>
                        @endforeach
                    </ol>
                </div>
                <div>
                    {!! Form::open(['route'=>'nuevo_mensaje','class'=>' ']) !!}
                    <div class="flex flex-col mb-4">
                        <input type='hidden' name='id_comisaria' id='id_comisaria' value={{ $comisaria->id_comisaria }}><br>
                        <input class='' type='text' name='accion_patrulla' id='accion_patrulla' >

                    </div>
                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        function saluda() {
            alert('hola');
        }
    </script>


@endpush

