<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Santo Pecado' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: #F4F6FF;
        }
    </style>
</head>
<body class="text-gray-700">

    <!-- NAVBAR -->
    <x-navbar />

    <!-- CONTENIDO -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="bg-white text-center py-6 mt-10 text-gray-500">
        <p>© {{ date('Y') }} Santo Pecado</p>
    </footer>

</body>
</html>