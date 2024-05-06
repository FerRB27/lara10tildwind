@extends('layout.plantilla')

@section('title', 'Curso' .$curso->name)

@section('content')
<div class="mt-8 m-8">
    <h1 class="text-zinc-500">Detales acerca de 
        <span class="bg-clip-text text-transparent bg-gradient-to-r
        from-pink-500 to-violet-500">{{$curso->name}}</span>
    </h1> <br>
    <a href="{{route('curso.index')}}" class="text-gray-300 bg-slate-950 hover:bg-slate-700
    ease-in duration-200 rounded p-2">
        Volver a los Cursos
    </a>
    <a href="{{route('curso.edit', $curso)}}" class="ml-5 text-gray-300 bg-slate-950 hover:bg-slate-700
    ease-in duration-200 rounded p-2">
        Editar a los Cursos
    </a>
    <p class="my-5 text-zinc-800">Descripcion: <strong>{{$curso->description}}</strong></p>
    <p class=" text-zinc-800 text-lg">Categoria: <strong>{{$curso->category}}</strong></p>
</div>
<div class="div">
    <form action="{{route('curso.destroy', $curso)}}" method="POST" class="mt-8">
        @csrf
        @method('delete')
        <button type="submit"
        class="bg-red-800 hover:bg-red-600 rounded-md ease-in-out hover:text-white duration-300 p-4">Eliminar</button>
    </form>
</div>
@endsection