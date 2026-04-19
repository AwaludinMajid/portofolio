<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Gallery - Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        :root {
            --font-sans: "Instrument Sans", ui-sans-serif, system-ui, sans-serif;
            --color-bg: #FDFDFC;
            --color-bg-dark: #0a0a0a;
            --color-text: #1b1b18;
            --color-text-dark: #fdfdfc;
            --color-border: #e3e3e0;
            --color-border-dark: #3E3E3A;
            --color-card-bg: rgba(255, 255, 255, 0.9);
            --color-card-bg-dark: rgba(22, 22, 21, 0.95);
            --color-primary: #f53003;
            --color-success: #10b981;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: var(--font-sans); background-color: var(--color-bg); color: var(--color-text); min-height: 100vh; }
        .dark body { background-color: var(--color-bg-dark); color: var(--color-text-dark); }
        .container { max-width: 72rem; margin: 0 auto; padding: 1rem; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .gap-4 { gap: 1rem; }
        .rounded-lg { border-radius: 0.75rem; }
        .rounded-full { border-radius: 9999px; }
        .shadow-md { box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); }
        .bg-white { background-color: #ffffff; }
        .bg-gray-100 { background-color: #f3f4f6; }
        .bg-green-100 { background-color: #dcfce7; }
        .text-sm { font-size: 0.875rem; }
        .text-base { font-size: 1rem; }
        .text-lg { font-size: 1.125rem; }
        .text-xl { font-size: 1.25rem; }
        .font-semibold { font-weight: 600; }
        .font-bold { font-weight: 700; }
        .border { border: 1px solid var(--color-border); }
        .border-dashed { border-style: dashed; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .py-5 { padding-top: 1.25rem; padding-bottom: 1.25rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-3 { margin-bottom: 0.75rem; }
        .mt-8 { margin-top: 2rem; }
        .w-full { width: 100%; }
        .max-w-7xl { max-width: 72rem; }
        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .gap-4 { gap: 1rem; }
        .cursor-pointer { cursor: pointer; }
        .text-red-600 { color: #dc2626; }
        .text-green-700 { color: #047857; }
        .text-slate-500 { color: #64748b; }
        .text-slate-700 { color: #334155; }
        .bg-primary { background-color: var(--color-primary); color: white; }
        .hover\:bg-red-600:hover { background-color: #dc2626; }
        .hover\:bg-slate-100:hover { background-color: #f1f5f9; }
        .transition { transition: all 0.2s ease; }
        .shadow-lg { box-shadow: 0 25px 50px rgba(0,0,0,0.08); }
        .object-cover { object-fit: cover; }
        .rounded-2xl { border-radius: 1rem; }
        .text-center { text-align: center; }
        .overflow-hidden { overflow: hidden; }

        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; }
        .gallery-card { border: 1px solid var(--color-border); border-radius: 1rem; overflow: hidden; background: white; }
        .gallery-card img { width: 100%; height: 180px; object-fit: cover; }
    </style>
</head>
<body>
    <div class="container">
        <header class="mb-6 flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold">Admin Gallery</h1>
                <p class="text-sm text-slate-500 mt-1">Upload foto untuk gallery terpisah dari pesan.</p>
            </div>
            <div class="flex gap-3">
                <a href="/admin/messages" class="btn" style="padding:0.75rem 1.25rem;border-radius:0.75rem;border:1px solid #e3e3e0;text-decoration:none;color:var(--color-text);">Ke Pesan</a>
                <a href="/gallery" class="btn" style="padding:0.75rem 1.25rem;border-radius:0.75rem;border:1px solid #e3e3e0;text-decoration:none;color:var(--color-text);">Lihat Gallery</a>
            </div>
        </header>

        @if(session('success'))
            <div class="mb-6 rounded-lg bg-green-100 border border-green-200 p-5 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <section class="bg-white rounded-2xl border border-dashed border-slate-200 p-6 shadow-md">
            <h2 class="text-xl font-semibold mb-4">Upload Foto Gallery</h2>
            <form action="{{ route('admin.gallery.upload') }}" method="POST" enctype="multipart/form-data" class="grid gap-4">
                @csrf
                <div>
                    <label class="text-sm font-semibold mb-2 block">Pilih Foto</label>
                    <input type="file" name="photo" accept="image/*" class="w-full" required>
                    @error('photo') <p class="text-red-600 text-sm mt-2">{{ $message }}</p> @enderror
                </div>
                <button type="submit" class="bg-primary text-white rounded-full px-6 py-3 text-sm font-semibold transition">Upload Foto</button>
            </form>
        </section>

        <section class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Foto Gallery</h2>
            @if($photos->count() > 0)
                <div class="gallery-grid">
                    @foreach($photos as $photo)
                        <div class="gallery-card">
                            <img src="{{ asset($photo->path) }}" alt="{{ $photo->title }}">
                            <div class="p-4">
                                <p class="font-semibold text-slate-700">{{ $photo->title ?: 'Foto Gallery' }}</p>
                                <p class="text-sm text-slate-500 mt-1">{{ $photo->description ?: 'Tidak ada deskripsi' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="p-10 text-center text-slate-500 bg-gray-100 rounded-2xl">Belum ada foto di gallery.</div>
            @endif
        </section>
    </div>
</body>
</html>
