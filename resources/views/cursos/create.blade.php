@extends('layout.plantilla')

@section('title', 'create')

@section('content')
<h1 class="mb-8 text-amber-900 text-3xl">CREA UNO NUEVO</h1>

<div class="container w-11/12 max-w-screen-md m-auto">
    <form action="{{route('curso.store')}}" method="POST" class="bg-gray-100 p-3">
        @csrf
        
        <!-- 
            El metodo Value="{{old('name')}}" en cada Input permite mantener
            el valor de ese campo de texto agregado al memoento de enviar el formulario,
            ya que si no se coloca, la validacion recargara el formulario, y la informacion
            se perdera, causando que se deba ingresarnuevamente
        -->
        <label for="">
            Nombre: <br>
            <input type="text" value="{{old('name')}}" 
            name="name" class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">
        </label>
        @error('name')
            <span class="text-red-500">{{$message}}</span>
        @enderror()

        <br><br>
        <label for="">
            Descripcion: <br>
            <textarea rows="5" name="description"
            class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">{{old('description')}}</textarea>
        </label>
        @error('description')
            <span class="text-red-500">{{$message}}</span>
        @enderror()

        <br><br>
        <label for="">
            Categoria: <br>
            <input type="text" name="category" value="{{old('category')}}" 
            class="rouded-md p-2 mt-1 w-full border border-2 border-line-200 outline-none">
        </label>
        @error('category')
            <span class="text-red-500">{{$message}}</span>
        @enderror()

        <br><br>
        <button type="sumbit" class="block mx-auto bg-sky-500 hover:bg-sky-200
    ease-in-out duration-200 rounded-md p-4 hover:underline text-white">
        Registrar Curso
        </button>
    </form>
</div>
@endsection