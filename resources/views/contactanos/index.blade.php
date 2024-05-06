@extends('layout.plantilla')

@section('title', 'Contactanos')

@section('content')
<h1></h1>
<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre
            <br>
            <input type="text" name="nombre"  value="{{old('nombre')}}" class="p-2 rounded-md mt-1
            w-full border border-2 border-line-200 outline-none">
        </label>
        @error('nombre')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <br>
        <label for="">
            Correo
            <br>
            <input type="email" name="correo"  value="{{old('correo')}}" class="p-2 rounded-md mt-1
            w-full border border-2 border-line-200 outline-none">
        </label>
        @error('correo')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <br>
        <label for="">
            Mensaje
            <br>
            <textarea rows="5" name="mensaje"
            class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">{{old('mensaje')}}</textarea>
        </label>
        @error('mensaje')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <button type="sumbit" class="mt-5 block mx-auto bg-sky-500 hover:bg-cyan-600
                ease-in-out duration-300 rounded-md p-4 hover:underline text-white">
                Enviar Mensaje
        </button>
    </form>
</div>
@if(@session('info'))
<script>
    alert("{{session('info')}}")
</script>
@endif
@endsection