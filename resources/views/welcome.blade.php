@extends('layouts.app')

@section('content')
    <section class="relative h-screen flex items-center justify-center bg-gradient-to-br from-primary-dark to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            {{-- Tambahkan elemen grafis unik, misalnya SVG pattern atau shape --}}
            <svg class="absolute bottom-0 left-0 w-full h-1/3 opacity-10" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="0.05" d="M0,192L60,197.3C120,203,240,213,360,208C480,203,600,181,720,170.7C840,160,960,160,1080,170.7C1200,181,1320,203,1380,213.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
            <div class="absolute top-0 right-0 w-48 h-48 bg-accent-color rounded-full mix-blend-overlay filter blur-xl opacity-30 transform translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary-light rounded-full mix-blend-overlay filter blur-xl opacity-20 transform -translate-x-1/2 translate-y-1/2"></div>
        </div>

        <div class="text-center z-10 p-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 leading-tight font-serif">Halo, Saya <span class="text-accent-color">Nama Anda</span></h1>
            <p class="text-xl md:text-2xl mb-8 tracking-wide">Desainer Web Kreatif & Pengembang Freelance.</p>
            <a href="#portfolio" class="bg-accent-color hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">Lihat Karya Saya</a>
        </div>
    </section>

    <section id="about" class="py-16 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-12 relative pb-4">
                <span class="relative z-10">Tentang Saya</span>
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-accent-color rounded-full z-0"></span>
            </h2>
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
                <div class="md:w-1/3 mb-8 md:mb-0">
                    <img src="https://via.placeholder.com/300" alt="Foto Profil Anda" class="rounded-lg shadow-xl border-4 border-accent-color object-cover w-full h-auto">
                </div>
                <div class="md:w-2/3 text-lg leading-relaxed">
                    <p class="mb-4">
                        Saya adalah seorang desainer web dan pengembang freelance dengan hasrat untuk menciptakan pengalaman digital yang indah dan fungsional. Dengan pengalaman lebih dari X tahun, saya berspesialisasi dalam membangun situs web responsif, menarik, dan berkinerja tinggi menggunakan teknologi modern seperti Laravel dan Tailwind CSS.
                    </p>
                    <p class="mb-4">
                        Saya percaya pada desain yang berpusat pada pengguna dan kode yang bersih, dengan fokus pada detail dan inovasi. Saya selalu mencari tantangan baru dan kesempatan untuk belajar serta berkembang.
                    </p>
                    <p>
                        Ketika tidak coding, saya suka [Hobi Anda, contoh: membaca buku, menjelajahi alam, atau bermain musik]. Mari berkolaborasi dan wujudkan ide-ide Anda!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-16 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-12 relative pb-4">
                <span class="relative z-10">Kemampuan Saya</span>
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-accent-color rounded-full z-0"></span>
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @php
                    $skills = [
                        ['name' => 'Laravel', 'icon' => 'path/to/laravel-icon.svg'], // Ganti dengan path ikon asli
                        ['name' => 'PHP', 'icon' => 'path/to/php-icon.svg'],
                        ['name' => 'Tailwind CSS', 'icon' => 'path/to/tailwind-icon.svg'],
                        ['name' => 'JavaScript', 'icon' => 'path/to/js-icon.svg'],
                        ['name' => 'Vue.js', 'icon' => 'path/to/vue-icon.svg'],
                        ['name' => 'MySQL', 'icon' => 'path/to/mysql-icon.svg'],
                        ['name' => 'Git', 'icon' => 'path/to/git-icon.svg'],
                        ['name' => 'Figma', 'icon' => 'path/to/figma-icon.svg'],
                    ];
                @endphp
                @foreach($skills as $skill)
                <div class="flex flex-col items-center p-4 bg-white dark:bg-gray-700 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    {{-- Ganti dengan SVG atau ikon font yang sesuai --}}
                    <svg class="w-12 h-12 text-accent-color mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16L2 12l4-4"></path></svg>
                    <span class="text-lg font-medium">{{ $skill['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-16 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-4xl font-bold text-center mb-12 relative pb-4">
                <span class="relative z-10">Portofolio</span>
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-accent-color rounded-full z-0"></span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $projects = [
                        ['title' => 'Proyek E-commerce Modern', 'description' => 'Desain dan pengembangan toko online dengan fitur lengkap.', 'image' => 'https://via.placeholder.com/400x300'],
                        ['title' => 'Aplikasi Manajemen Proyek', 'description' => 'Sistem untuk mengelola tugas dan kolaborasi tim.', 'image' => 'https://via.placeholder.com/400x300'],
                        ['title' => 'Landing Page Perusahaan', 'description' => 'Desain landing page yang menarik dan berkonversi tinggi.', 'image' => 'https://via.placeholder.com/400x300'],
                        ['title' => 'Blog Pribadi Responsif', 'description' => 'Platform blog dengan desain minimalis dan SEO friendly.', 'image' => 'https://via.placeholder.com/400x300'],
                    ];
                @endphp
                @foreach($projects as $project)
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-2 text-primary-dark dark:text-white">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $project['description'] }}</p>
                        <a href="#" class="inline-block bg-accent-color hover:bg-purple-700 text-white text-sm font-medium py-2 px-4 rounded-full transition duration-300">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-4xl font-bold text-center mb-12 relative pb-4">
                <span class="relative z-10">Hubungi Saya</span>
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-accent-color rounded-full z-0"></span>
            </h2>
            <p class="text-center text-lg mb-8">
                Tertarik untuk berkolaborasi? Jangan ragu untuk menghubungi saya!
            </p>
            <form action="{{ route('contact.submit') }}" method="POST" class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-xl">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 dark:text-gray-200 dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-accent-color transition duration-200" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 dark:text-gray-200 dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-accent-color transition duration-200" required>
                </div>
                <div class="mb-5">
                    <label for="message" class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2">Pesan Anda</label>
                    <textarea id="message" name="message" rows="6" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 dark:text-gray-200 dark:bg-gray-800 leading-tight focus:outline-none focus:ring-2 focus:ring-accent-color transition duration-200" required></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-accent-color hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </section>
@endsection