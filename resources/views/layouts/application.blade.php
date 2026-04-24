<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Santo Pecado' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffe4ec, #fff6f9);
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
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