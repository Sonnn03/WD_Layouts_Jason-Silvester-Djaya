<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    @vite('resources/css/style.css')
</head>
<body>
   @include('partials.header')

    <section class="max-w-7xl mx-auto px-4 md:px-8 py-12">
        <p class="text-sm font-semibold text-blue-700 dark:text-blue-400 uppercase tracking-wide">Tentang Saya</p>
        <h2 class="mt-2 text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">
            Halo, Perkenalkan saya Jason Silvester Djaya
        </h2>
        <p class="mt-4 max-w-2xl text-slate-600 dark:text-slate-400 leading-relaxed">
            Saya adalah seorang mahasiswa Universitas Ciputra jurusan IMT. Saya senang dalam mempelajari hal baru yang saya belum ketahui, dan saya senang 
            untuk ikut aktif dalam berbagai kegiatan yang dilaksanakan ataupun diselenggarakan di kampus.
        </p>

        <dl class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Nama Lengkap</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Jason Silvester Djaya</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Status</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Mahasiswa</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Fokus</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Kehidupan</dd>
            </div>
        </dl>

    </section>

    @include('partials.footer')

</body>
</html>