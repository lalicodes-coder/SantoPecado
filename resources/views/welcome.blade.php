<x-application-layout>

    <!-- HERO -->
    <section class="text-center py-20 px-6">
        <h2 class="text-5xl font-bold text-pink-900 mb-6">
            Un capricho... que vale la pena
        </h2>
        <p class="text-lg mb-8">
            Tartas caseras hechas con amor, azúcar y cero arrepentimiento.
        </p>

        <a href="#" class="bg-pink-400 text-white px-6 py-3 rounded-full text-lg hover:bg-pink-500 transition">
            Ver catálogo
        </a>
    </section>

    <!-- DESTACADAS -->
    <section class="px-10 py-16">

        <h3 class="text-3xl font-bold text-center text-[#FACFDD] mb-12">
            Nuestras últimas tartas 🍰
        </h3>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($posts as $post)

                <div class="bg-white rounded-2xl shadow-lg p-4 text-center hover:scale-105 transition">
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{ asset('storage/' . $post->image_url) }}" 
                            class="w-full h-48 object-cover rounded-xl mb-4">

                        <h4 class="text-xl font-semibold">
                            {{ $post->title }}
                        </h4>

                        <p class="text-gray-500">
                            {{ Str::limit($post->description, 80) }}
                        </p>

                        <p class="text-[#FACFDD] font-bold mt-2">
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