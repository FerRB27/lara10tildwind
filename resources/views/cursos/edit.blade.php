@extends('layout.plantilla')

@section('title', 'Actualizar')

@section('content')
<h1 class="mb-8 text-amber-900 text-3xl">Actualiza la Informacion</h1>

<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{route('curso.update', $curso)}}" method="POST" class="bg-gray-100 p-3">
        @csrf
        @method('put')
        <label for="">
            Nombre: <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}" class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">
        </label>
        @error('name')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <br><br>
        <label for="">
            Descripcion: <br>
            <textarea rows="5" name="description"
            class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">{{old('description', $curso->description)}}</textarea>
        </label>
        @error('description')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <br><br>
        <label for="">
            Categoria: <br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}" class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">
        </label>
        @error('category')
            <span class="text-red-500">{{$message}}</span>
        @enderror()
        <br><br>
        <button type="sumbit" class="block mx-auto bg-sky-500 hover:bg-sky-200
    ease-in-out duration-200 rounded-md p-4 hover:underline text-white">
        Actualizar Curso
        </button>
    </form>
</div>
@endsection