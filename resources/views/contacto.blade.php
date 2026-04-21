<x-application-layout title="Contacto">

<section class="max-w-4xl mx-auto py-16 px-6">

    <h1 class="text-4xl font-bold text-center text-[#FACFDD] mb-10">
        Contáctanos 💌
    </h1>

    <div class="grid md:grid-cols-2 gap-10">

        <!-- INFO -->
        <div class="space-y-6">
            <p class="text-lg">
                ¿Tienes antojo? ¿Quieres una tarta personalizada?  
                Escríbenos y hacemos magia 🍰✨
            </p>

            <div>
                <p class="font-semibold">📍 Ubicación</p>
                <p class="text-gray-500">Murcia, España</p>
            </div>

            <div>
                <p class="font-semibold">📞 Teléfono</p>
                <p class="text-gray-500">+34 600 000 000</p>
            </div>

            <div>
                <p class="font-semibold">📩 Email</p>
                <p class="text-gray-500">santopecado@email.com</p>
            </div>
        </div>

        <!-- FORM -->
        <form class="bg-white p-6 rounded-2xl shadow-md space-y-4">

            <input 
                type="text" 
                placeholder="Tu nombre"
                class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FACFDD]"
            >

            <input 
                type="email" 
                placeholder="Tu email"
                class="w-full border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FACFDD]"
            >

            <textarea 
                placeholder="¿Qué se te antoja? 😏"
                class="w-full border p-3 rounded-lg h-32 focus:outline-none focus:ring-2 focus:ring-[#FACFDD]"
            ></textarea>

            <button 
                class="w-full bg-[#FACFDD] text-white py-3 rounded-full hover:opacity-90 transition">
                Enviar mensaje 💌
            </button>

        </form>

    </div>

</section>

</x-application-layout>