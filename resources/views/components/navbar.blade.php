<nav class="bg-pink-900 shadow-md px-6 py-4 flex justify-between items-center sticky top-0 z-50">
    <!-- LOGO -->
    <div class="flex items-center gap-2">
        <span class="text-2xl font-bold text-white">
            Santo Pecado
        </span>
    </div>

    <!-- LINKS -->
    <div class="hidden md:flex gap-6 text-sm md:text-base">

        <a href="/" 
           class="relative group">
            <p class="text-[#FACFDD]">Inicio</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="{{route('posts.index')}}" class="relative group">
            <p class="text-[#FACFDD]">Tartas</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
            <p class="text-[#FACFDD]">Especialidades</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="#" class="relative group">
            <p class="text-[#FACFDD]">Contacto</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

        <a href="{{route('posts.create')}}" class="relative group">
            <p class="text-[#FACFDD]">Subir nueva receta</p>
            <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-[#FACFDD] transition-all group-hover:w-full"></span>
        </a>

    </div>

</nav>