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
            <!-- listado y FRM -->
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- <div>

                    <ol class='list-decimal'>
                        @foreach($listado as $mensaje)
                            <li>{{ $mensaje->accion_patrulla }} </li>
                        @endforeach
                    </ol>





                </div> --}}


                    <h2>Con Alpine</h2>
                <section x-data="para_alpine(lista_mensajes)" x-on:items-load.window=" items.push($event.detail)">

                    <ol class='list-decimal'  >
                        <template x-for="cada_uno in items">
                            <li x-text="cada_uno.accion_patrulla"></li>
                        </template>

                    </ol>
                </section>




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

            let lista_mensajes = {!! json_encode($listado->toArray()) !!};

            //console.log(lista_mensajes);


            //Componente que se utiliza para alpine
            function para_alpine(arreglo_externo=[]) {
                return {
                    items: arreglo_externo,
                }
            }



            //evento para actualizar el componenete
            let evento = new CustomEvent("items-load", {
                detail : {
                    accion_patrulla:'Accion de la patrulla',
                    id_comisaria:2,
                    id_patrulla:1
                }

            })






    </script>
@endpush

