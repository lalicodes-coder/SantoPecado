<x-application-layout>

    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="{{ asset('storage/'.$post->image_url) }}" alt="{{ $post->title }}" class="w-full object-contain bg-white rounded-xl mb-4">
            <p class="text-gray-500 mb-2">{{ $post->footer }}</p>
            
            <p class="text-gray-700 mb-4">{{ $post->description }}</p>
            <p class="text-gray-700 mb-4">Tamaño: {{ $post->slice }} porciones</p>
            <p class="text-gray-900 font-bold text-xl">Precio: ${{ number_format($post->price, 2) }}</p>
        </div>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-2">
            @csrf
            @method('DELETE')

            <button 
                onclick="return confirm('¿Seguro que quieres eliminar esta tarta? 😈')"
                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                Eliminar
            </button>
        </form>
    </div>

</x-application-layout>