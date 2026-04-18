<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>M. Awaludin Majid | Projects</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700&family=Plus_Jakarta_Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary-container": "#ffd700",
                "on-primary-container": "#705e00",
                "on-surface": "#dae2fd",
                "surface": "#0b1326",
                "background": "#0b1326",
                "surface-container": "#171f33",
                "surface-container-high": "#222a3d",
              },
              fontFamily: {
                headline: ["Space Grotesk"],
                body: ["Manrope"],
              }
            }
          }
        }
    </script>
    <style>
        body {
            background-color: #0b1326;
            background-image: radial-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }
        .grain-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.03;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuDH5EG9hedm3FFfRNuqrcMPQQsmuFMfE3NSwIBoSo3DQltKDiwHzALNWgq5IX6vj8MArpaL1RbsvlRBqFYw0CAVT6dI8qo52vU5rPz2cBA6kC5jAdoYqtxlV2xcE49IyI1Lzt2RLk4JDnFmJYo-6pmBc17lE5wi2XkPCSFJ2opsjawCoJvUS4rTvYD29sqFqt1Jwy8ctmLZKJP8mso9VyXx2I917ZNGhHG_37eUh81ZPoBshaM1ovvDHe9jxpzt28XEQ1urtlEptew);
        }
    </style>
</head>
<body class="selection:bg-primary-container selection:text-on-primary-container">
<div class="grain-overlay"></div>
<!-- Top Navigation -->
<header class="fixed top-0 z-50 w-full px-6 py-4 bg-[#0b1326]/80 backdrop-blur-lg shadow-[0_10px_30px_-15px_rgba(0,210,253,0.1)]">
<div class="max-w-6xl mx-auto flex justify-between items-center">
<a href="/" class="flex items-center gap-2 text-[#dae2fd]/60 hover:text-[#00d2fd] transition-colors">
<span class="material-symbols-outlined">arrow_back</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold">Back</span>
</a>
<div class="text-xl font-bold text-[#FFD700] uppercase tracking-[0.2em] font-['Space_Grotesk']">
                M. AWALUDIN MAJID
            </div>
<a href="/#contact" class="text-[#dae2fd]/60 hover:text-[#00d2fd] transition-colors">
<span class="material-symbols-outlined">mail</span>
</a>
</div>
</header>

<main class="pt-24 pb-16">
<!-- Hero Section -->
<section class="relative px-6 md:px-12 lg:px-24 mb-24 overflow-hidden">
<div class="max-w-6xl mx-auto">
<div class="mb-8">
<p class="text-[#FFD700]/60 font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold">PROJECTS</p>
<h1 class="font-headline text-5xl md:text-7xl font-bold text-on-surface my-6">Koleksi Proyek GitHub</h1>
<p class="font-body text-lg text-on-surface/60 max-w-2xl leading-relaxed">
                    Daftar lengkap proyek yang saya kerjakan. Setiap proyek mencerminkan pengalaman saya dalam web development, mobile development, dan berbagai teknologi modern.
                </p>
</div>
</div>
</section>

<!-- Projects Grid -->
<section class="px-6 md:px-12 lg:px-24">
<div class="max-w-6xl mx-auto">
<div id="projects-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"></div>
<p id="projects-loading" class="text-center text-on-surface/60 py-12 font-body">Memuat proyek dari GitHub...</p>
</div>
</section>

<!-- Footer -->
<footer class="mt-32 border-t border-[#FFD700]/10">
<div class="px-6 md:px-12 lg:px-24 py-16 max-w-6xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-start gap-8 mb-8">
<div class="flex-1">
<h3 class="font-headline text-xl font-bold text-[#FFD700] mb-4">M. AWALUDIN MAJID</h3>
<p class="font-body text-on-surface/60 text-sm">
                        Website portofolio modern showcasing proyek dan skill. Mahasiswa Teknik Informatika Universitas Pancasakti Bekasi.
                    </p>
</div>
<div class="flex gap-8">
<div>
<h4 class="font-headline text-sm font-bold text-[#FFD700] mb-3 uppercase tracking-wider">Navigation</h4>
<nav class="flex flex-col gap-2 font-body text-sm">
<a href="/" class="text-on-surface/60 hover:text-on-surface transition-colors">Home</a>
<a href="/projects" class="text-on-surface/60 hover:text-on-surface transition-colors">Projects</a>
<a href="/#contact" class="text-on-surface/60 hover:text-on-surface transition-colors">Contact</a>
</nav>
</div>
<div>
<h4 class="font-headline text-sm font-bold text-[#FFD700] mb-3 uppercase tracking-wider">Follow</h4>
<nav class="flex flex-col gap-2 font-body text-sm">
<a href="https://github.com/AwaludinMajid" target="_blank" rel="noopener" class="text-on-surface/60 hover:text-[#FFD700] transition-colors">GitHub</a>
<a href="mailto:m.awaludinmajid@gmail.com" class="text-on-surface/60 hover:text-[#FFD700] transition-colors">Email</a>
</nav>
</div>
</div>
</div>
<div class="border-t border-[#FFD700]/10 pt-8 text-center font-body text-sm text-on-surface/40">
<p>&copy; 2026 M. AWALUDIN MAJID. POWERED BY LARAVEL & TAILWIND.</p>
</div>
</div>
</footer>
</main>

        <script>
            async function loadProjectsPage() {
                const container = document.getElementById('projects-container');
                const loadingText = document.getElementById('projects-loading');

                try {
                    const response = await fetch('https://api.github.com/users/AwaludinMajid/repos?sort=updated&per_page=20');
                    if (!response.ok) throw new Error('API Error');

                    const repos = await response.json();
                    if (!Array.isArray(repos) || repos.length === 0) {
                        loadingText.textContent = 'Tidak ada proyek yang tersedia.';
                        return;
                    }

                    container.innerHTML = repos.map(repo => {
                        return `
                            <article class="rounded-2xl border border-[#FFD700]/10 bg-surface-container hover:bg-surface-container-high backdrop-blur-md p-6 transition-all hover:shadow-[0_20px_50px_rgba(255,215,0,0.1)] group">
                                <div class="flex items-start justify-between mb-4">
                                    <h3 class="font-headline text-lg font-bold text-on-surface flex-1">${repo.name}</h3>
                                    <a href="${repo.html_url}" target="_blank" rel="noopener" class="text-[#FFD700] opacity-60 group-hover:opacity-100 transition-opacity ml-2">
                                        <span class="material-symbols-outlined text-xl">open_in_new</span>
                                    </a>
                                </div>
                                <p class="font-body text-sm leading-relaxed text-on-surface/70 mb-4">${repo.description || 'Tidak ada deskripsi'}</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    ${repo.language ? `<span class="inline-block rounded-full bg-[#FFD700]/10 px-3 py-1 text-xs font-semibold text-[#FFD700]">${repo.language}</span>` : ''}
                                    ${repo.stargazers_count > 0 ? `<span class="text-xs text-on-surface/50 flex items-center gap-1"><span class="material-symbols-outlined text-sm">star</span>${repo.stargazers_count}</span>` : ''}
                                    ${repo.forks_count > 0 ? `<span class="text-xs text-on-surface/50 flex items-center gap-1"><span class="material-symbols-outlined text-sm">call_split</span>${repo.forks_count}</span>` : ''}
                                </div>
                                <a href="${repo.html_url}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm font-headline font-bold text-[#FFD700] hover:text-on-surface transition-colors">
                                    Lihat Repository
                                    <span class="material-symbols-outlined text-sm">arrow_outward</span>
                                </a>
                            </article>
                        `;
                    }).join('');

                    loadingText.remove();
                } catch (error) {
                    console.error(error);
                    loadingText.textContent = 'Gagal memuat data GitHub. Silakan coba lagi nanti.';
                }
            }

            document.addEventListener('DOMContentLoaded', loadProjectsPage);
        </script>
    </body>
</html>
