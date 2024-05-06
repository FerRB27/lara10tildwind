<header>
    <h1 class="my-5 font-bold text-4xl">Logo/Nombre</h1>
    <nav class="bg-slate-500 p-3 mb-5">
        <ul class="list-none flex space-x-10 text-white">
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active': '' }}">Home</a></li>
            <li><a href="{{route('curso.index')}}" class="{{request()->routeIs('curso.*') ? 'active': '' }}">Cursos</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active': '' }}">Nosotros</a></li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active': '' }}">Contactanos</a></li>
            
        </ul>
    </nav>
</header>