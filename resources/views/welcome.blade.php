<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>M. Awaludin Majid | Portfolio</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700&family=Plus_Jakarta_Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "inverse-primary": "#705d00",
                "secondary-fixed-dim": "#3cd7ff",
                "secondary": "#a2e7ff",
                "inverse-surface": "#dae2fd",
                "error": "#ffb4ab",
                "on-primary-fixed": "#221b00",
                "surface-dim": "#0b1326",
                "surface-container-lowest": "#060e20",
                "surface-bright": "#31394d",
                "on-tertiary-fixed": "#23005b",
                "tertiary-fixed-dim": "#d1bcff",
                "on-secondary-fixed": "#001f27",
                "on-error": "#690005",
                "on-primary-fixed-variant": "#544600",
                "error-container": "#93000a",
                "surface-tint": "#e9c400",
                "on-background": "#dae2fd",
                "on-tertiary-fixed-variant": "#5700c9",
                "on-secondary": "#003642",
                "on-surface-variant": "#d0c6ab",
                "primary-fixed-dim": "#e9c400",
                "surface-variant": "#2d3449",
                "secondary-container": "#00d2fd",
                "on-tertiary": "#3c0090",
                "outline-variant": "#4d4732",
                "primary": "#fff6df",
                "tertiary-container": "#e2d3ff",
                "tertiary-fixed": "#e9ddff",
                "tertiary": "#fbf4ff",
                "surface-container": "#171f33",
                "on-tertiary-container": "#7316ff",
                "surface-container-high": "#222a3d",
                "inverse-on-surface": "#283044",
                "primary-fixed": "#ffe16d",
                "on-secondary-fixed-variant": "#004e5f",
                "primary-container": "#ffd700",
                "outline": "#999077",
                "on-primary": "#3a3000",
                "on-surface": "#dae2fd",
                "surface-container-low": "#131b2e",
                "surface-container-highest": "#2d3449",
                "surface": "#0b1326",
                "background": "#0b1326",
                "secondary-fixed": "#b4ebff",
                "on-primary-container": "#705e00",
                "on-error-container": "#ffdad6",
                "on-secondary-container": "#005669"
              },
              borderRadius: {
                DEFAULT: "0.125rem",
                lg: "0.25rem",
                xl: "0.5rem",
                full: "0.75rem"
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
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuDH5EG9hedm3FFfRNuqrcMPQQsmuFMfE3NSwIBoSo3DQltKDiwHzALNWgq5IX6vj8MArpaL1RbsvlRBqFYw0CAVT6dI8qo52vU5rPz2cBA6kC5jAdoXqtxlV2xcE49IyI1Lzt2RLk4JDnFmJYo-6pmBc17lE5wi2XkPCSFJ2opsjawCoJvUS4rTvYD29sqFqt1Jwy8ctmLZKJP8mso9VyXx2I917ZNGhHG_37eUh81ZPoBshaM1ovvDHe9jxpzt28XEQ1urtlEptew);
        }
        .asymmetric-frame {
            clip-path: polygon(0% 0%, 100% 0%, 100% 85%, 85% 100%, 0% 100%);
        }
        .text-glow-gold {
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }
        .text-glow-blue {
            text-shadow: 0 0 10px rgba(0, 212, 253, 0.3);
        }
    </style>
    @vite(['resources/css/app.css'])
</head>
<body class="font-body text-on-surface selection:bg-primary-container selection:text-on-primary-container">
<div class="grain-overlay"></div>
<nav class="bg-[#0b1326]/80 backdrop-blur-xl font-['Space_Grotesk'] tracking-tight fixed top-0 w-full z-50 shadow-[0_10px_30px_-15px_rgba(0,212,255,0.1)] flex justify-between items-center px-8 py-4 max-w-full">
    <div class="text-xl font-bold tracking-widest text-yellow-400">M. AWALUDIN MAJID</div>
    <div class="hidden md:flex gap-8 items-center">
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="#about">About</a>
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="#skills">Skills</a>
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="#experience">Experience</a>
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="#projects">Projects</a>
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="#gaming">Gaming</a>
        <a class="text-slate-300 hover:text-cyan-400 transition-colors" href="/gallery">Gallery</a>
        <a class="px-6 py-2 bg-primary-container text-on-primary-container font-bold hover:scale-105 active:scale-95 transition-all" href="#contact">Connect</a>
    </div>
    <button class="md:hidden text-primary">
        <span class="material-symbols-outlined">menu</span>
    </button>
</nav>
<main>
    <section class="min-h-screen pt-32 pb-20 px-8 flex flex-col md:flex-row items-center gap-16 relative overflow-hidden" id="hero">
        <div class="flex-1 z-10">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1 bg-surface-container-high rounded-full">
                <span class="w-2 h-2 bg-secondary-container animate-pulse rounded-full"></span>
                <span class="font-label text-[10px] uppercase tracking-[0.2em] text-secondary">Informatics Engineer</span>
            </div>
            <h1 class="font-headline text-6xl md:text-8xl font-bold leading-none mb-6 relative">
                <span class="text-primary text-glow-gold">M. AWALUDIN</span><br/>
                <span class="text-secondary text-glow-blue ml-4 md:ml-12">MAJID</span>
            </h1>
            <p class="text-xl md:text-2xl text-on-surface-variant max-w-xl font-light mb-10 leading-relaxed">
                Synthesizing code and creativity to build high-performance <span class="text-primary-fixed-dim font-medium italic underline decoration-secondary">digital experiences</span>.
            </p>
            <div class="flex gap-6">
                <a href="/projects" class="px-8 py-4 bg-primary-container text-on-primary-container font-headline font-bold text-lg hover:translate-x-2 transition-transform flex items-center gap-3">
                    VIEW PROJECTS <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="/resume" target="_blank" rel="noopener" class="px-8 py-4 border border-outline-variant font-headline font-bold text-lg hover:bg-surface-container-high transition-colors flex items-center gap-3">
                    RESUME <span class="material-symbols-outlined">download</span>
                </a>
            </div>
        </div>
        <div class="flex-1 relative">
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary-container/10 blur-[100px] rounded-full"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-secondary-container/10 blur-[100px] rounded-full"></div>

            <div class="absolute -top-20 -right-20 w-80 h-80 bg-primary-container/10 blur-[100px] rounded-full"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-secondary-container/10 blur-[100px] rounded-full"></div>

            <div class="mx-auto max-w-md rounded-[2rem] border border-white/10 bg-slate-950/90 shadow-2xl shadow-cyan-500/10 overflow-hidden">
                <div class="relative h-[600px] overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/profil.png') }}" alt="Background">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent"></div>
                    <div class="absolute inset-x-0 top-16 px-8 text-center">
                        <p class="text-xs uppercase tracking-[0.3em] text-cyan-300/80">Software Engineer</p>
                        <h1 class="mt-5 text-5xl font-semibold text-white">M. Awaludin Majid</h1>
                        <p class="mt-3 text-sm text-slate-200/80">Informatics Engineer</p>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 px-5 pb-5">
                        <div class="flex items-center justify-between gap-4 rounded-[1.75rem] border border-white/10 bg-slate-900/85 p-4 backdrop-blur-xl">
                            <div class="flex items-center gap-3">
                                <img class="h-14 w-14 rounded-full border-2 border-white/20 object-cover" src="{{ asset('images/profil.png') }}" alt="Profile">
                                <div>
                                    <p class="text-sm font-semibold text-white">@awaludinmajid</p>
                                    <p class="text-xs text-green-400">Online</p>
                                </div>
                            </div>
                            <a href="#contact" class="inline-flex items-center rounded-2xl bg-cyan-500 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-surface-container-low py-24 px-8" id="about">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20">
            <div class="lg:w-1/3">
                <h2 class="font-headline text-4xl font-bold mb-8 flex items-center gap-4">
                    <span class="text-primary">01.</span> BIO
                </h2>
                <p class="text-on-surface-variant leading-relaxed mb-6">
                    Saya adalah mahasiswa tingkat akhir Program Studi Teknik Informatika (Semester 8) di Universitas Pancasakti Bekasi. Saya memiliki latar belakang pendidikan Teknik Komputer dan Jaringan dari SMK Sumber Daya Bekasi, yang memberi saya fondasi kuat dalam sistem dan jaringan.
                </p>
                <p class="text-on-surface-variant leading-relaxed mb-6">
                    Pengalaman saya mencakup pengembangan aplikasi fullstack (web & mobile) menggunakan Laravel, Flutter, Firebase, dan MySQL. Saya juga memiliki pengalaman dalam IT Support dan Administrasi melalui internship di PT Pusat Bekam Internasional dan Kelurahan Jatiasih, yang mengasah kemampuan saya dalam troubleshooting, maintenance, dan manajemen data.
                </p>
                <div class="p-6 bg-surface-container-highest border-l-2 border-secondary">
                    <span class="font-label text-[10px] text-secondary uppercase block mb-2">Philosophy</span>
                    <p class="font-headline text-lg italic text-on-surface">"Code is the medium, but experience is the message."</p>
                </div>
            </div>
            <div class="lg:w-2/3">
                <h3 class="font-headline text-2xl font-bold mb-12">EDUCATION TIMELINE</h3>
                <div class="space-y-12 relative">
                    <div class="absolute left-4 top-0 bottom-0 w-[1px] bg-gradient-to-b from-primary via-secondary to-transparent"></div>
                    <div class="relative pl-12">
                        <div class="absolute left-[11px] top-2 w-2 h-2 bg-primary ring-4 ring-primary/20 rounded-full"></div>
                        <span class="font-label text-xs text-primary mb-1 block">2022 - Sekarang (Semester 8)</span>
                        <h4 class="text-xl font-bold">Universitas Pancasakti Bekasi</h4>
                        <p class="text-on-surface-variant">S1 Teknik Informatika</p>
                        <p class="text-sm text-on-surface-variant mt-2">Focus: Web Development (Laravel), Mobile Development (Flutter), Database (MySQL, Firebase), Agile Kanban</p>
                    </div>
                    <div class="relative pl-12">
                        <div class="absolute left-[11px] top-2 w-2 h-2 bg-secondary ring-4 ring-secondary/20 rounded-full"></div>
                        <span class="font-label text-xs text-secondary-fixed-dim mb-1 block">2019 - 2022</span>
                        <h4 class="text-xl font-bold">SMK Sumber Daya Bekasi</h4>
                        <p class="text-on-surface-variant">Teknik Komputer dan Jaringan (TKJ)</p>
                    </div>
                    <div class="relative pl-12">
                        <div class="absolute left-[11px] top-2 w-2 h-2 bg-secondary/50 rounded-full"></div>
                        <span class="font-label text-xs text-slate-500 mb-1 block">2016 - 2019</span>
                        <h4 class="text-xl font-bold">SMP Negeri 3 Gunungputri</h4>
                        <p class="text-on-surface-variant">Sekolah Menengah Pertama</p>
                    </div>
                    <div class="relative pl-12">
                        <div class="absolute left-[11px] top-2 w-2 h-2 bg-secondary/50 rounded-full"></div>
                        <span class="font-label text-xs text-slate-500 mb-1 block">2010 - 2016</span>
                        <h4 class="text-xl font-bold">SDN 01 Bojong Kulur</h4>
                        <p class="text-on-surface-variant">Sekolah Dasar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-8 max-w-7xl mx-auto" id="skills">
        <h2 class="font-headline text-4xl font-bold mb-16 text-center">
            TECHNICAL <span class="text-secondary">ALCHEMY</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-primary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary">smartphone</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Pengembangan Mobile</h3>
                <p class="text-sm text-on-surface-variant">Flutter, Dart</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-secondary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-secondary">database</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Backend & Database</h3>
                <p class="text-sm text-on-surface-variant">Firebase (Firestore, Authentication), MySQL</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-primary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary">code</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Pengembangan Web</h3>
                <p class="text-sm text-on-surface-variant">HTML, PHP, JavaScript, Laravel</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-secondary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-secondary">construction</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Alat Pengembangan</h3>
                <p class="text-sm text-on-surface-variant">Visual Studio Code, Git</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-primary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary">admin_panel_settings</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Administrasi</h3>
                <p class="text-sm text-on-surface-variant">Pengelolaan dokumen dan pembuatan laporan</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-secondary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-secondary">build</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Dukungan Teknis</h3>
                <p class="text-sm text-on-surface-variant">Instalasi perangkat lunak, troubleshooting komputer, jaringan dasar</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-primary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-primary">description</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Perangkat Lunak Kantor</h3>
                <p class="text-sm text-on-surface-variant">Microsoft Word & Excel</p>
            </div>
            <div class="bg-surface-container-high p-8 hover:translate-y-[-8px] transition-all duration-300 group border-t-2 border-transparent hover:border-secondary">
                <div class="w-12 h-12 bg-surface-container-highest flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-secondary">cloud_upload</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4">Manajemen Dokumen</h3>
                <p class="text-sm text-on-surface-variant">Upload dan Manajemen Dokumen via Website</p>
            </div>
        </div>
    </section>
    <section class="bg-surface-container py-24 px-8" id="hobbies">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-6 mb-16">
                <h2 class="font-headline text-4xl font-bold">HOBBIES <span class="text-secondary">& INTERESTS</span></h2>
                <div class="h-[1px] flex-1 bg-gradient-to-r from-secondary to-transparent"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-surface-container-high p-8 rounded-3xl border border-[#FFD700]/10 hover:border-[#FFD700]/30 transition-all">
                    <div class="mb-4 text-primary text-4xl">🏊</div>
                    <h3 class="font-headline text-2xl font-bold mb-3">Swimming</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">Melatih fokus, disiplin, dan stamina melalui aktivitas renang rutin.</p>
                </div>
                <div class="bg-surface-container-high p-8 rounded-3xl border border-[#00d2fd]/10 hover:border-[#00d2fd]/30 transition-all">
                    <div class="mb-4 text-secondary text-4xl">🚴</div>
                    <h3 class="font-headline text-2xl font-bold mb-3">Cycling</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">Menjaga kebugaran dan menikmati perjalanan sambil mengeksplorasi lingkungan.</p>
                </div>
                <div class="bg-surface-container-high p-8 rounded-3xl border border-[#a2e7ff]/10 hover:border-[#a2e7ff]/30 transition-all">
                    <div class="mb-4 text-secondary-fixed-dim text-4xl">🎮</div>
                    <h3 class="font-headline text-2xl font-bold mb-3">Gaming</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">Main game saat sedang ingin santai, biasanya PUBG Steam kalau lagi mood.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-surface-container-low py-24 px-8 overflow-hidden" id="experience">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20">
                <div>
                    <span class="font-label text-secondary tracking-widest uppercase text-xs">Journey</span>
                    <h2 class="font-headline text-4xl font-bold mt-2">PROFESSIONAL EXPERIENCE</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="relative group">
                    <div class="absolute -left-4 top-0 w-1 h-full bg-primary-container opacity-20 group-hover:opacity-100 transition-opacity"></div>
                    <div class="bg-surface-container p-8 ml-4">
                        <span class="text-primary font-bold">April - June 2025</span>
                        <h3 class="text-2xl font-headline font-bold mt-2">Administrative Staff & IT Support</h3>
                        <p class="text-secondary font-medium mb-4">PT. Pusat Bekam Internasional</p>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Managed administrative documentation, employee data processing, software installation, and network troubleshooting. Supported digitalization of company archives and contributed to IT infrastructure optimization.</p>
                    </div>
                </div>
                <div class="relative group mt-12 md:mt-0">
                    <div class="absolute -left-4 top-0 w-1 h-full bg-secondary-container opacity-20 group-hover:opacity-100 transition-opacity"></div>
                    <div class="bg-surface-container p-8 ml-4">
                        <span class="text-secondary font-bold">Internship (~2 Months)</span>
                        <h3 class="text-2xl font-headline font-bold mt-2">Administrative Staff</h3>
                        <p class="text-primary font-medium mb-4">Kelurahan Jatiasih (Government)</p>
                        <p class="text-on-surface-variant text-sm leading-relaxed">Handled digital documentation, community service administration, and citizen data management. Gained experience in public sector processes and provided technical support for office systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-8 max-w-7xl mx-auto" id="projects">
        <h2 class="font-headline text-4xl font-bold mb-16 text-right">FEATURED <span class="text-primary">PROJECTS</span></h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <a class="group relative bg-surface-container-high overflow-hidden block transition-all hover:shadow-2xl hover:shadow-primary/10" href="/projects/warung-es-kelapa">
                <div class="aspect-video w-full overflow-hidden">
                    <img alt="POS System" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlXlaHk_vAfsZzejVLjdQEGuItoUHeEifzG4jK2GtkkIAX1ya0dTvDEM0F1LXp1Af99GoXhGjsj-xzkzZtmZBofcHWWe3O1K6doxWVRYOGtSLoJtBAcUps1zJ9Ew8euflKeSL51lbGjKJijc1uJIBRdp0B4P6-mn5ygLHIjKWgpE5HcY0atSxWzA_94wv-q5ULIcFg7MyJrSEBIqH1xkaXS7lp_9N0Ceox-BmZXpRBQnLnyECOHlxJE6dU69pe2ilxwDDOWIswxO8" />
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="font-headline text-2xl font-bold group-hover:text-primary transition-colors">POS Warung Es Kelapa</h3>
                    </div>
                    <p class="text-on-surface-variant mb-6 leading-relaxed">A custom Point of Sale application designed specifically for micro-businesses. Focuses on speed, intuitive inventory tracking, and daily reporting.</p>
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex flex-wrap gap-3">
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-primary border border-primary/20">LARAVEL</span>
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-secondary border border-secondary/20">MYSQL</span>
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-on-surface-variant border border-outline-variant">TAILWIND</span>
                        </div>
                        <div class="flex items-center gap-2 text-primary font-headline font-bold text-sm group-hover:translate-x-1 transition-transform">
                            <span>EXPLORE CASE STUDY</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </a>
            <a class="group relative bg-surface-container-high overflow-hidden block transition-all hover:shadow-2xl hover:shadow-primary/10" href="/projects/pantau-cuaca">
                <div class="aspect-video w-full overflow-hidden bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center">
                    <span class="material-symbols-outlined text-8xl text-white/80">cloud</span>
                </div>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="font-headline text-2xl font-bold group-hover:text-primary transition-colors">Pantau Cuaca</h3>
                    </div>
                    <p class="text-on-surface-variant mb-6 leading-relaxed">Aplikasi web Laravel untuk memantau kondisi cuaca real-time di berbagai ibu kota provinsi Indonesia. Menggunakan API cuaca eksternal untuk menampilkan suhu, kondisi cuaca, dan kelembaban udara.</p>
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex flex-wrap gap-3">
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-primary border border-primary/20">LARAVEL</span>
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-secondary border border-secondary/20">API</span>
                            <span class="px-3 py-1 bg-surface-container-lowest text-[10px] font-label text-on-surface-variant border border-outline-variant">BLADE</span>
                        </div>
                        <div class="flex items-center gap-2 text-primary font-headline font-bold text-sm group-hover:translate-x-1 transition-transform">
                            <span>EXPLORE CASE STUDY</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section class="bg-surface-container-lowest py-24 px-8" id="gaming">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-6 mb-16">
                <h2 class="font-headline text-4xl font-bold">GAMING <span class="text-secondary">CORNER</span></h2>
                <div class="h-[1px] flex-1 bg-gradient-to-r from-secondary to-transparent"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-surface-container-high p-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined text-4xl text-secondary">sports_esports</span>
                    </div>
                    <h4 class="font-label text-xs tracking-tighter text-secondary-fixed-dim mb-2 uppercase">MOBA</h4>
                    <h3 class="text-xl font-headline font-bold mb-4">MLBB</h3>
                    <p class="text-sm text-on-surface-variant leading-relaxed">Strategic depth and lightning reflexes are the core of every victory.</p>
                    <div class="mt-6 flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-[10px] font-label text-on-surface-variant uppercase tracking-wider">ONLINE</span>
                    </div>
                </div>
                <div class="bg-surface-container-high p-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined text-4xl text-primary">target</span>
                    </div>
                    <h4 class="font-label text-xs tracking-tighter text-primary-fixed-dim mb-2 uppercase">BATTLE ROYALE</h4>
                    <h3 class="text-xl font-headline font-bold mb-4">PUBG Steam</h3>
                    <p class="text-sm text-on-surface-variant leading-relaxed">Survival is an art form. Precision is the primary tool.</p>
                    <div class="mt-6 flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-[10px] font-label text-on-surface-variant uppercase tracking-wider">ONLINE</span>
                    </div>
                </div>
                <div class="bg-surface-container-high p-8 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-100 transition-opacity">
                        <span class="material-symbols-outlined text-4xl text-secondary">sports_soccer</span>
                    </div>
                    <h4 class="font-label text-xs tracking-tighter text-secondary-fixed-dim mb-2 uppercase">SPORTS</h4>
                    <h3 class="text-xl font-headline font-bold mb-4">EA FC Mobile</h3>
                    <p class="text-sm text-on-surface-variant leading-relaxed">Team building and tactical execution on the digital pitch.</p>
                    <div class="mt-6 flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                        <span class="text-[10px] font-label text-on-surface-variant uppercase tracking-wider">ONLINE</span>
                    </div>
                </div>
            </div>
            <div class="mt-16 p-12 bg-surface-container-low text-center border-y border-outline-variant/20">
                <p class="font-headline text-3xl italic text-primary max-w-3xl mx-auto leading-tight">"Gaming is not just about entertainment; it's a simulation of decision-making under pressure."</p>
            </div>
        </div>
    </section>
    <section class="py-24 px-8 max-w-5xl mx-auto" id="contact">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            <div>
                <h2 class="font-headline text-5xl font-bold mb-8">GET IN <span class="text-primary">TOUCH</span></h2>
                <p class="text-on-surface-variant mb-12 text-lg">Ready to start a new project or just want to chat about tech? Drop a message below.</p>
                <div class="space-y-8">
                    <div class="flex items-center gap-6">
                        <div class="w-12 h-12 bg-surface-container-high flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <h4 class="font-label text-[10px] text-slate-500 uppercase tracking-widest">Email</h4>
                            <p class="font-headline font-bold">m.awaludinmajid@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <div class="w-12 h-12 bg-surface-container-high flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">chat</span>
                        </div>
                        <div>
                            <h4 class="font-label text-[10px] text-slate-500 uppercase tracking-widest">WhatsApp</h4>
                            <p class="font-headline font-bold">+62 852-1732-7220</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-low p-8 border border-outline-variant/30">
                <form class="space-y-6" id="contact-form">
                    <div>
                        <label class="block font-label text-[10px] text-secondary uppercase mb-2">Full Name</label>
                        <input name="name" class="w-full bg-surface-container-lowest border-none focus:ring-1 focus:ring-primary text-on-surface p-4 transition-all" placeholder="Enter your name" type="text" required />
                    </div>
                    <div>
                        <label class="block font-label text-[10px] text-secondary uppercase mb-2">Email Address</label>
                        <input name="email" class="w-full bg-surface-container-lowest border-none focus:ring-1 focus:ring-primary text-on-surface p-4 transition-all" placeholder="name@example.com" type="email" required />
                    </div>
                    <div>
                        <label class="block font-label text-[10px] text-secondary uppercase mb-2">Subject</label>
                        <input name="subject" class="w-full bg-surface-container-lowest border-none focus:ring-1 focus:ring-primary text-on-surface p-4 transition-all" placeholder="Subject of your message" type="text" required />
                    </div>
                    <div>
                        <label class="block font-label text-[10px] text-secondary uppercase mb-2">Message</label>
                        <textarea name="message" class="w-full bg-surface-container-lowest border-none focus:ring-1 focus:ring-primary text-on-surface p-4 transition-all" placeholder="Tell me about your project" rows="4" required></textarea>
                    </div>
                    <button type="submit" id="submit-btn" class="w-full py-4 bg-primary-container text-on-primary-container font-headline font-bold text-lg hover:brightness-110 transition-all">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </section>
</main>
<footer class="bg-[#0b1326] w-full py-12 px-8 flex flex-col md:flex-row justify-between items-center gap-8 border-t border-surface-container">
    <div class="text-yellow-400 font-bold font-headline tracking-tighter">M. AWALUDIN MAJID</div>
    <div class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-[0.2em] text-slate-500 text-center">© 2026 M. AWALUDIN MAJID. FULLSTACK DEVELOPER.</div>
    <div class="flex gap-6">
        <a class="text-slate-500 hover:text-yellow-400 transition-all" href="https://github.com/AwaludinMajid" target="_blank" rel="noopener">GitHub</a>
        <a class="text-slate-500 hover:text-yellow-400 transition-all" href="https://instagram.com/9504_majid" target="_blank" rel="noopener">Instagram</a>
        <a class="text-slate-500 hover:text-yellow-400 transition-all" href="https://wa.me/6285217327220" target="_blank" rel="noopener">WhatsApp</a>
    </div>
</footer>

<script>
document.getElementById('contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = this;
    const submitBtn = document.getElementById('submit-btn');
    const formData = new FormData(form);

    try {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        // Simulate API call delay
        await new Promise(resolve => setTimeout(resolve, 1000));

        console.log('Success: Message sent successfully!');
        alert('Thank you! Your message has been received.');
        form.reset();

    } catch (error) {
        console.log('Error:', error.message);
        alert('An error occurred. Please try again.');
    } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'SEND MESSAGE';
    }
});


