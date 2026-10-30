<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Blog</title>
    @vite('resources/css/style.css')
</head>
<body>
    @include('partials.header')

    <main class="max-w-7xl mx-auto px-4 md:px-8 py-12 min-h-screen">
        <div class="mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">Blog & Artikel Terkini</h1>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <img src="{{ asset('img/tailwind.png') }}" alt="Cover Artikel" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Web Development</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-25">25 Okt 2026</time>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="https://tailwindcss.com/" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Cara Membangun UI Modern dengan Tailwind CSS</a>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Tailwind CSS mempermudah kita dalam membangun antarmuka web yang responsif tanpa perlu menulis kode CSS dari nol. Mari kita bahas langkah pertamanya.
                    </p>
                    <a href="https://tailwindcss.com/" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </article>

            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
               <img src="{{ asset('img/laravel.png') }}" alt="Cover Artikel Laravel" class="w-full h-48 object-cover">
               
               <div class="p-6 flex flex-col flex-grow">
                  <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Framework</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-25">25 Okt 2026</time>
                  </div>
                  <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="https://laravel.com/" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                           Mengenal Laravel: Framework PHP Terpopuler saat ini
                        </a>
                  </h2>
                  <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Pelajari mengapa Laravel menjadi pilihan utama bagi developer web. Mulai dari sistem routing yang mudah, keamanan bawaan yang tangguh, hingga fitur Eloquent ORM.
                  </p>
                  <a href="/" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </a>
               </div>
            </article>

            <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
               <img src="{{ asset('img/flutter.png') }}" alt="Cover Artikel Flutter" class="w-full h-48 object-cover">
               
               <div class="p-6 flex flex-col flex-grow">
                  <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                        <span class="font-semibold text-blue-600 dark:text-blue-400">Mobile Dev</span>
                        <span>&bull;</span>
                        <time datetime="2026-10-18">18 Okt 2026</time>
                  </div>
                  <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                        <a href="https://flutter.dev/" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                           Membangun Aplikasi Mobile Super Cepat dengan Flutter
                        </a>
                  </h2>
                  <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                        Flutter memungkinkan developer membuat aplikasi native untuk iOS dan Android hanya dari satu basis kode. Mari pelajari konsep dasar Widget dan keunggulannya.
                  </p>
                  <a href="https://flutter.dev/" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                        Baca selengkapnya
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                  </a>
               </div>
            </article>

        </div>
    </main>

    @include('partials.footer')
</body>
</html>