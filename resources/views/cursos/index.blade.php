@extends('layout.plantilla')

@section('title', 'Index')

@section('content')
<h1 class="mt-5 mb-8 ml-5 bg-clip-text text-transparent bg-gradient-to-r
    from-pink-500 to-violet-500 text-[32px] ">Bienvenido al Index</h1>
<ul>
    @foreach ($cursos as $item)
        <li class="ml-8 border-b-2 pt-2 border-grey-200 hover:text-zinc-500 hover:underline"><a href="{{ route('cursos.show', $item->id)}}">{{$item->name}}</a></li>
    @endforeach
</ul>
<div class="ml-5">
    {{ $cursos->links() }}
</div>
@endsection