<x-application-layout>

    <!-- HERO -->
    <section class="relative h-[80vh] flex items-center justify-center text-center">

        <!-- IMAGEN FONDO -->
        <img src="{{ asset('storage/images/tarta.jpg') }}" 
                alt="Tarta de chocolate"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- CONTENIDO -->
        <div class="relative z-10 text-white px-6">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                Degusta en cada mordisco 🍰
            </h2>

            <p class="text-lg md:text-xl mb-8">
                Tartas caseras que te van a hacer perder la dignidad
            </p>

            <a href="#" 
            class="bg-pink-400 px-8 py-3 rounded-full text-lg hover:bg-pink-500 transition shadow-xl">
                Ver catálogo
            </a>
        </div>

    </section>

    <!-- DESTACADAS -->
    <section class="px-10 py-16">
        <h3 class="text-3xl font-bold text-center text-pink-900 mb-12">
            Nuestras últimas tartas 🍰
        </h3>
        <p class="text-center text-gray-500 mb-10">
            Hechas a mano, con amor y probablemente demasiada azúcar 💀
        </p>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
            @foreach($posts as $post)
                <div class="w-full max-w-sm bg-white/80 rounded-3xl shadow-xl p-4 text-center 
                        hover:scale-105 hover:shadow-2xl transition duration-300">
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{ asset('storage/' . $post->image_url) }}" 
                             class="w-full h-48 object-cover rounded-xl mb-4 hover:scale-110 transition duration-500">

                        <h4 class="text-xl font-semibold">
                            {{ $post->title }}
                        </h4>

                        <p class="text-gray-500">
                            {{ Str::limit($post->description, 80) }}
                        </p>

                        <p class="text-pink-900 font-bold mt-2">
                            {{ $post->price }}€
                        </p>
                    </a>
                </div>

            @endforeach

        </div>

    </section>

    <!-- CTA -->
    <section class="text-center py-16 bg-gray-300">
        <h3 class="text-3xl font-bold mb-4">¿Lista para pecar?</h3>
        <p class="mb-6">Haz tu pedido y date el capricho que te mereces.</p>

        <a href="#" class="bg-pink-900 text-white px-8 py-3 rounded-full hover:bg-pink-600 transition">
            Pedir ahora
        </a>
    </section>

</x-application-layout>