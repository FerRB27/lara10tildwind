@extends('layout.plantilla')

@section('title', 'Index')

@section('content')
<a class="bg-sky-500 hover:bg-sky-200
    ease-in-out duration-200 rounded-md p-2" 
href="{{route('curso.create')}}">Crear Curso</a>

<h1 class="mt-5 mb-8 ml-5 bg-clip-text text-transparent bg-gradient-to-r
    from-pink-500 to-violet-500 text-[32px] ">Bienvenido al Index</h1>
<ul>
    @foreach ($cursos as $item)
        <li class="ml-8 border-b-2 pt-2 border-grey-200 hover:text-zinc-500 hover:underline">
            <a href="{{ route('curso.show', $item)}}">{{$item->name}}</a></li>
    @endforeach
</ul>
<div class="ml-5">
    {{ $cursos->links() }}
</div>
@endsection