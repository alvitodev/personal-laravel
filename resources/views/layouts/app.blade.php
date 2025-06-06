<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nama Anda - Personal Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css') {{-- Untuk Laravel 10+ (Vite) --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> Untuk Laravel lebih lama (Mix) --}}
</head>
<body class="font-sans text-gray-800 bg-gray-50 antialiased">

    <div class="min-h-screen flex flex-col">
        <header class="bg-primary-dark text-white p-4 shadow-lg sticky top-0 z-50">
            <nav class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-2xl font-bold font-serif tracking-wide hover:text-accent-color transition duration-300">
                    Nama Anda
                </a>
                <ul class="flex space-x-6">
                    <li><a href="#about" class="hover:text-accent-color transition duration-300">Tentang</a></li>
                    <li><a href="#skills" class="hover:text-accent-color transition duration-300">Kemampuan</a></li>
                    <li><a href="#portfolio" class="hover:text-accent-color transition duration-300">Portofolio</a></li>
                    <li><a href="#contact" class="hover:text-accent-color transition duration-300">Kontak</a></li>
                </ul>
            </nav>
        </header>

        <main class="flex-grow">
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white p-6 text-center mt-auto">
            <div class="container mx-auto">
                <p>&copy; {{ date('Y') }} Nama Anda. All rights reserved.</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a href="#" class="hover:text-accent-color transition duration-300">LinkedIn</a>
                    <a href="#" class="hover:text-accent-color transition duration-300">GitHub</a>
                    <a href="#" class="hover:text-accent-color transition duration-300">Twitter</a>
                </div>
            </div>
        </footer>
    </div>

    {{-- @vite('resources/js/app.js') --}}
</body>
</html>