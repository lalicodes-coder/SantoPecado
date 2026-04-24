<nav class="bg-white/30 shadow-md px-6 py-2 flex justify-between items-center sticky top-0 z-50">    <!-- LOGO -->
<a href="/" class="flex items-center gap-3">
    <img src="{{ asset('storage/images/logo.png') }}" 
         class="h-20 w-auto object-contain transition hover:scale-110">


</a>

    <!-- LINKS -->
    <div class="hidden md:flex gap-6 text-sm md:text-base">

        <a href="/" 
           class="relative group">
            <p class="text-pink-900">Inicio</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="{{route('posts.index')}}" class="relative group">
            <p class="text-pink-900">Tartas</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
            <p class="text-pink-900">Especialidades</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="{{route('contacto')}}" class="relative group">
            <p class="text-pink-900">Contacto</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="{{route('posts.create')}}" class="relative group">
            <p class="text-pink-900">Subir nueva receta</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

    </div>

</nav>