<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Gallery | M. Awaludin Majid</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700&family=Plus_Jakarta_Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "secondary": "#a2e7ff",
                "surface-container": "#171f33",
                "surface-container-high": "#222a3d",
                "surface-container-low": "#131b2e",
                "surface-container-highest": "#2d3449",
                "on-surface": "#dae2fd",
                "on-surface-variant": "#d0c6ab",
                "primary-container": "#ffd700",
                "on-primary-container": "#3a3000",
                "outline-variant": "#4d4732"
              },
              fontFamily: {
                headline: ["Space Grotesk"],
                body: ["Manrope"],
                label: ["Plus Jakarta Sans"]
              }
            }
          }
        }
    </script>
    <style>
        body { background-color: #0b1326; }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            padding: 1rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            background: #171f33;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            align-items: center;
            justify-content: center;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            max-width: 90vw;
            max-height: 90vh;
            position: relative;
        }

        .modal-content img {
            width: 100%;
            height: auto;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 8px;
        }

        .close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            background: none;
            border: none;
        }

        .close:hover {
            color: #a2e7ff;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 1rem;
            }

            .close {
                top: 10px;
                right: 10px;
                color: black;
            }
        }
    </style>
</head>
<body class="font-body text-on-surface bg-[#0b1326]">
<main class="min-h-screen">
    <section class="py-16 px-8 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12">
            <div>
                <p class="font-label text-xs uppercase tracking-[0.25em] text-secondary mb-3">Photo Gallery</p>
                <h1 class="text-5xl md:text-6xl font-headline font-bold leading-tight">My Gallery</h1>
                <p class="mt-6 text-on-surface-variant max-w-2xl">Koleksi foto pribadi. Klik untuk memperbesar.</p>
            </div>
            <div class="flex flex-wrap gap-4">
                <a href="/" class="inline-flex items-center justify-center rounded-full border border-outline-variant px-6 py-3 text-sm font-bold text-on-surface hover:bg-surface-container transition">Back to Home</a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-8 rounded-3xl bg-[#0b1326] border border-[#3b5f8a] p-6 text-secondary">{{ session('success') }}</div>
        @endif

        <div class="mb-8 rounded-3xl bg-[#0b1326] border border-[#3b5f8a] p-6">
            <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data" class="grid gap-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium mb-2 text-on-surface">Pilih Foto</label>
                    <input type="file" name="photo" accept="image/*" class="block w-full text-sm text-on-surface" required>
                    @error('photo') <p class="text-sm text-red-400 mt-1">{{ $message }}</p> @enderror
                </div>
                <button type="submit" class="inline-flex items-center justify-center rounded-full bg-primary-container px-6 py-3 text-sm font-bold text-on-primary-container hover:bg-yellow-300 transition">Upload Foto</button>
            </form>
        </div>

        @if($photos->count() > 0)
            <div class="gallery-grid">
                @foreach($photos as $photo)
                    <div class="gallery-item" onclick="openModal('{{ asset($photo->path) }}')">
                        <img src="{{ asset($photo->path) }}" alt="Gallery photo" loading="lazy">
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <div class="text-6xl mb-4">📷</div>
                <h3 class="text-2xl font-bold text-on-surface mb-2">Belum ada foto</h3>
                <p class="text-on-surface-variant mb-6">Foto gallery masih kosong.</p>
            </div>
        @endif
    </section>

    <!-- Modal -->
    <div id="imageModal" class="modal" onclick="closeModal()">
        <button class="close" onclick="closeModal()">&times;</button>
        <div class="modal-content">
            <img id="modalImage" src="" alt="Gallery photo">
        </div>
    </div>

    <script>
        function openModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modalImg.src = imageSrc;
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        // Close modal when pressing Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</main>
</body>
</html>
