<x-application-layout>

    <section class="px-10 py-16">
        <h3 class="text-3xl font-bold text-center text-pink-400 mb-12">
            Nuestras tartas
        </h3>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($posts as $post)
                <div class="bg-white rounded-2xl shadow-lg p-4 text-center hover:scale-105 transition">
                    <h4 class="text-xl font-semibold">{{ $post->title }}</h4>
                    <p class="text-gray-500">{{ $post->description }}</p>
                </div>
            @endforeach

        </div>
    </section>

</x-application-layout>