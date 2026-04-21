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

    <x-footer />
    <x-whats-app-button />
</body>
</html>