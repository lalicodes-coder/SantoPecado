<x-application-layout>

    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Crear nueva publicación</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 p-2 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                <textarea name="description" id="description" rows="5" class="w-full border border-gray-300 p-2 rounded-lg" required></textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold mb-2">Precio:</label>
                <input type="text" name="price" id="price" rows="5" class="w-full border border-gray-300 p-2 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 font-bold mb-2">Imagen:</label>
                <input type="file" name="image_url" id="image_url" class="w-full border border-gray-300 p-2 rounded-lg" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Crear publicación</button>
        </form>
    </div>

</x-application-layout>