<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Aurelian Cyber | Es Kelapa POS Case Study</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Manrope:wght@200..800&family=Plus_Jakarta_Sans:wght@200..800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
                    "secondary-fixed": "#b4ebff",
                    "on-secondary": "#003642",
                    "on-tertiary-fixed-variant": "#5700c9",
                    "surface-dim": "#0b1326",
                    "on-secondary-fixed-variant": "#004e5f",
                    "outline-variant": "#4d4732",
                    "secondary-container": "#00d2fd",
                    "tertiary-fixed-dim": "#d1bcff",
                    "on-tertiary": "#3c0090",
                    "on-primary-fixed": "#221b00",
                    "on-error-container": "#ffdad6",
                    "outline": "#999077",
                    "on-tertiary-fixed": "#23005b",
                    "on-secondary-container": "#005669",
                    "surface": "#0b1326",
                    "on-surface-variant": "#d0c6ab",
                    "primary-fixed": "#ffe16d",
                    "on-primary": "#3a3000",
                    "inverse-primary": "#705d00",
                    "error-container": "#93000a",
                    "secondary": "#a2e7ff",
                    "primary": "#fff6df",
                    "surface-bright": "#31394d",
                    "on-error": "#690005",
                    "inverse-on-surface": "#283044",
                    "secondary-fixed-dim": "#3cd7ff",
                    "surface-container": "#171f33",
                    "on-primary-container": "#705e00",
                    "on-secondary-fixed": "#001f27",
                    "surface-variant": "#2d3449",
                    "surface-container-low": "#131b2e",
                    "on-primary-fixed-variant": "#544600",
                    "background": "#0b1326",
                    "surface-container-high": "#222a3d",
                    "on-surface": "#dae2fd",
                    "error": "#ffb4ab",
                    "on-background": "#dae2fd",
                    "on-tertiary-container": "#7316ff",
                    "tertiary-fixed": "#e9ddff",
                    "surface-container-highest": "#2d3449",
                    "inverse-surface": "#dae2fd",
                    "primary-fixed-dim": "#e9c400",
                    "tertiary-container": "#e2d3ff",
                    "surface-tint": "#e9c400",
                    "primary-container": "#ffd700",
                    "surface-container-lowest": "#060e20",
                    "tertiary": "#fbf4ff"
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
          },
        },
      }
    </script>
<style>body {
    font-family: "Manrope", sans-serif;
    background-color: #0b1326;
    color: #dae2fd
    }
.grain-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(/images/contoh2.png);
    opacity: 0.03;
    pointer-events: none;
    z-index: 9999
    }
.asymmetric-frame {
    border-radius: 2rem 2rem 0 2rem
    }
.gradient-mesh {
    background: radial-gradient(circle at 20% 30%, rgba(255, 215, 0, 0.08) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(0, 210, 253, 0.08) 0%, transparent 50%)
    }
.material-symbols-outlined {
    font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
    }</style>
</head>
<body class="selection:bg-primary-container selection:text-on-primary-container">
<div class="grain-overlay"></div>
<!-- Top Navigation -->
<header class="flex justify-between items-center w-full px-6 py-4 fixed top-0 z-50 bg-[#0b1326]/80 backdrop-blur-lg shadow-[0_10px_30px_-15px_rgba(0,210,253,0.1)]">
<div class="flex items-center gap-4">
<a class="flex items-center gap-2 text-[#dae2fd]/60 hover:text-[#00d2fd] transition-colors duration-300 active:scale-95 group" href="/">
<span class="material-symbols-outlined">arrow_back</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold">Back to Portfolio</span>
</a>
</div>
<div class="text-xl font-bold text-[#FFD700] uppercase tracking-[0.2em] font-['Space_Grotesk']">
            M. AWALUDIN MAJID
        </div>
<div class="flex items-center gap-4 text-[#dae2fd]/60">
<a href="https://github.com/AwaludinMajid/warung_es_kelapa_app" target="_blank" rel="noopener" class="hover:text-[#00d2fd] transition-colors" title="View on GitHub">
<span class="material-symbols-outlined">code</span>
</a>
</div>
</header>
<main class="pt-24 pb-32">
<!-- Hero Section -->
<section class="relative px-6 md:px-12 lg:px-24 mb-24 overflow-hidden">
<div class="gradient-mesh absolute inset-0 -z-10"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7 space-y-8">
<div class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-container/10 border border-secondary-container/20 rounded-full">
<span class="w-2 h-2 bg-secondary-container rounded-full animate-pulse"></span>
<span class="font-label text-[10px] uppercase tracking-widest text-secondary-container font-bold">Case Study 2024</span>
</div>
<h1 class="font-headline text-5xl md:text-7xl font-bold text-primary tracking-tight leading-tight">
                        Aplikasi POS <br/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-container to-secondary-container">Warung Es Kelapa</span>
</h1>
<p class="font-body text-xl text-on-surface/80 max-w-2xl leading-relaxed">
                        Digitalizing Traditional UMKM through a robust, real-time inventory and sales ecosystem built for speed and reliability.
                    </p>
<div class="flex flex-wrap gap-4">
<div class="bg-surface-container-high px-6 py-4 asymmetric-frame border-l-2 border-primary-container">
<p class="font-label text-[10px] uppercase tracking-widest text-on-surface/40">Platform</p>
<p class="font-headline text-lg font-bold">Android Mobile</p>
</div>
<div class="bg-surface-container-high px-6 py-4 asymmetric-frame border-l-2 border-secondary-container">
<p class="font-label text-[10px] uppercase tracking-widest text-on-surface/40">Sector</p>
<p class="font-headline text-lg font-bold">Micro-Retail (UMKM)</p>
</div>
</div>
</div>
<div class="lg:col-span-5 relative group">
<div class="absolute -inset-4 bg-gradient-to-tr from-primary-container/20 to-secondary-container/20 blur-3xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
<img alt="Mobile App Mockup" class="relative z-10 w-full h-auto rounded-[3rem] shadow-2xl border-4 border-surface-container-highest transform lg:translate-x-12 lg:scale-110" data-alt="Modern high-fidelity mobile app screenshot of a POS dashboard showing sales charts and product inventory for a coconut shop" src="/images/contoh2.png"/>
</div>
</div>
</section>
<!-- Overview Bento Grid -->
<section class="px-6 md:px-12 lg:px-24 mb-32">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- The Problem -->
<div class="md:col-span-2 bg-surface-container-low p-10 rounded-3xl relative overflow-hidden group">
<div class="absolute top-0 right-0 w-32 h-32 bg-error/5 rounded-full blur-3xl -mr-16 -mt-16"></div>
<span class="material-symbols-outlined text-error mb-6 text-4xl" data-icon="warning">warning</span>
<h3 class="font-headline text-3xl font-bold text-on-surface mb-6">The Bottleneck</h3>
<p class="font-body text-lg text-on-surface/70 leading-relaxed mb-6">
                        Traditional "Warung" owners struggled with manual ledger recording, leading to inaccurate stock levels, unaccounted losses, and an inability to track daily profit trends in real-time. The goal was to replace paper trails with a zero-latency digital brain.
                    </p>
<div class="flex items-center gap-4 text-on-surface/50 font-label text-xs tracking-widest">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm" data-icon="close">close</span> INEFFICIENCY</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm" data-icon="close">close</span> HUMAN ERROR</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm" data-icon="close">close</span> NO DATA SYNC</span>
</div>
</div>
<!-- Tech Stack Card -->
<div class="bg-surface-container-high p-10 rounded-3xl border-t border-primary-container/20">
<h3 class="font-headline text-xl font-bold text-primary-container mb-8 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="database">database</span> Tech Stack
                    </h3>
<ul class="space-y-6">
<li class="flex items-center gap-4 group">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center group-hover:bg-secondary-container/20 transition-colors">
<span class="material-symbols-outlined text-secondary-container" data-icon="bolt">bolt</span>
</div>
<div>
<p class="font-headline font-bold">Flutter & Dart</p>
<p class="text-[10px] font-label text-on-surface/40 uppercase tracking-widest">Cross-Platform Core</p>
</div>
</li>
<li class="flex items-center gap-4 group">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center group-hover:bg-primary-container/20 transition-colors">
<span class="material-symbols-outlined text-primary-container" data-icon="cloud">cloud</span>
</div>
<div>
<p class="font-headline font-bold">Firebase Firestore</p>
<p class="text-[10px] font-label text-on-surface/40 uppercase tracking-widest">Real-time DB</p>
</div>
</li>
<li class="flex items-center gap-4 group">
<div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center group-hover:bg-secondary-container/20 transition-colors">
<span class="material-symbols-outlined text-secondary-container" data-icon="lock">lock</span>
</div>
<div>
<p class="font-headline font-bold">Firebase Auth</p>
<p class="text-[10px] font-label text-on-surface/40 uppercase tracking-widest">Secure Access</p>
</div>
</li>
</ul>
</div>
</div>
</section>
<!-- Features Section -->
<section class="bg-surface-container-lowest py-24 px-6 md:px-12 lg:px-24">
<div class="max-w-4xl mb-16">
<h2 class="font-headline text-4xl font-bold text-on-surface mb-4">Engineered for Performance</h2>
<p class="font-body text-on-surface/60">We utilized Agile Kanban methodologies to deliver a production-ready MVP in record time, focusing on high-impact retail features.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="group bg-surface-container p-8 rounded-2xl hover:bg-surface-container-high transition-all duration-500 hover:-translate-y-2 border-b-2 border-transparent hover:border-secondary-container">
<span class="material-symbols-outlined text-secondary-container text-3xl mb-6 block group-hover:scale-110 transition-transform" data-icon="receipt_long">receipt_long</span>
<h4 class="font-headline font-bold text-lg mb-2">Real-time Transaction</h4>
<p class="font-body text-sm text-on-surface/50 leading-relaxed">Instant checkout with automated inventory deduction across all linked devices.</p>
</div>
<div class="group bg-surface-container p-8 rounded-2xl hover:bg-surface-container-high transition-all duration-500 hover:-translate-y-2 border-b-2 border-transparent hover:border-primary-container">
<span class="material-symbols-outlined text-primary-container text-3xl mb-6 block group-hover:scale-110 transition-transform" data-icon="inventory_2">inventory_2</span>
<h4 class="font-headline font-bold text-lg mb-2">Inventory Control</h4>
<p class="font-body text-sm text-on-surface/50 leading-relaxed">Low-stock alerts and ingredient tracking to prevent business downtime.</p>
</div>
<div class="group bg-surface-container p-8 rounded-2xl hover:bg-surface-container-high transition-all duration-500 hover:-translate-y-2 border-b-2 border-transparent hover:border-secondary-container">
<span class="material-symbols-outlined text-secondary-container text-3xl mb-6 block group-hover:scale-110 transition-transform" data-icon="monitoring">monitoring</span>
<h4 class="font-headline font-bold text-lg mb-2">Daily Reports</h4>
<p class="font-body text-sm text-on-surface/50 leading-relaxed">Deep-dive analytics on best-selling items and peak hour trends.</p>
</div>
<div class="group bg-surface-container p-8 rounded-2xl hover:bg-surface-container-high transition-all duration-500 hover:-translate-y-2 border-b-2 border-transparent hover:border-primary-container">
<span class="material-symbols-outlined text-primary-container text-3xl mb-6 block group-hover:scale-110 transition-transform" data-icon="developer_board">developer_board</span>
<h4 class="font-headline font-bold text-lg mb-2">Agile Kanban</h4>
<p class="font-body text-sm text-on-surface/50 leading-relaxed">Rapid iteration cycles ensuring every feature solves a real-world pain point.</p>
</div>
</div>
</section>
<!-- Full Width Visual -->
<section class="mt-32 px-6 md:px-12 lg:px-24">
<div class="relative rounded-[3rem] overflow-hidden h-[600px] group shadow-2xl">
<img alt="POS in Action" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Cinematic shot of a person using a mobile point of sale app in a modern tropical cafe setting with warm sunlight and plants" src="/images/contoh2.png"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dim via-transparent to-transparent opacity-80"></div>
<div class="absolute bottom-12 left-12 max-w-lg">
<h3 class="font-headline text-4xl font-bold text-primary mb-4">Redefining Traditional Retail</h3>
<p class="font-body text-on-surface text-lg">The implementation resulted in a 40% reduction in reporting time and zero data discrepancies during the pilot phase.</p>
</div>
</div>
</section>
<!-- Call to Action -->
<section class="py-32 px-6 text-center max-w-4xl mx-auto">
<h2 class="font-headline text-5xl font-bold mb-8">Interested in the Project?</h2>
<p class="font-body text-xl text-on-surface/60 mb-12">View the source code on GitHub to see how this mobile POS application was built with Flutter and Firebase.</p>
<div class="flex flex-col md:flex-row gap-6 justify-center">
<a href="https://github.com/AwaludinMajid/warung_es_kelapa_app" target="_blank" rel="noopener" class="bg-primary-container text-on-primary-container font-headline font-bold px-10 py-5 rounded-xl hover:scale-105 transition-all shadow-[0_20px_50px_rgba(255,215,0,0.2)]">
                    VIEW ON GITHUB
                </a>
<a href="/" class="border border-outline-variant text-on-surface font-headline font-bold px-10 py-5 rounded-xl hover:bg-surface-container transition-all">
                    BACK TO PORTFOLIO
                </a>
</div>
</section>
</main>
<!-- Bottom Navigation -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#0b1326]/90 backdrop-blur-2xl rounded-t-3xl border-t border-[#FFD700]/10 shadow-[0_-10px_40px_rgba(0,0,0,0.5)]">
<a class="flex flex-col items-center justify-center text-[#dae2fd]/40 hover:text-[#FFD700] transition-all" href="/">
<span class="material-symbols-outlined">home</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-[#FFD700] bg-[#FFD700]/5 rounded-xl px-4 py-1 transition-all" href="https://github.com/AwaludinMajid/warung_es_kelapa_app" target="_blank" rel="noopener">
<span class="material-symbols-outlined">code</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold mt-1">GitHub</span>
</a>
<a class="flex flex-col items-center justify-center text-[#dae2fd]/40 hover:text-[#FFD700] transition-all" href="/projects">
<span class="material-symbols-outlined">folder</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold mt-1">Projects</span>
</a>
<a class="flex flex-col items-center justify-center text-[#dae2fd]/40 hover:text-[#FFD700] transition-all" href="/#contact">
<span class="material-symbols-outlined">mail</span>
<span class="font-['Plus_Jakarta_Sans'] text-[10px] uppercase tracking-widest font-bold mt-1">Contact</span>
</a>
</nav>
</body></html>
