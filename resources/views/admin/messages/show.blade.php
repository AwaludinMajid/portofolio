<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Pesan - {{ $message->subject }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            /* Modern CSS Variables and Base Styles */
            :root {
                --font-sans: "Instrument Sans", ui-sans-serif, system-ui, sans-serif;
                --color-bg: #FDFDFC;
                --color-bg-dark: #0a0a0a;
                --color-text: #1b1b18;
                --color-text-dark: #fdfdfc;
                --color-text-muted: #43413f;
                --color-text-muted-dark: #d6d4d0;
                --color-text-secondary: #706f6c;
                --color-text-secondary-dark: #A1A09A;
                --color-border: #e3e3e0;
                --color-border-dark: #3E3E3A;
                --color-card-bg: rgba(255, 255, 255, 0.9);
                --color-card-bg-dark: rgba(22, 22, 21, 0.95);
                --color-accent: #fff2f2;
                --color-accent-dark: #1D0002;
                --color-primary: #f53003;
                --color-success: #10b981;
                --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
                --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
                --shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.08);
                --shadow-card: 0 16px 30px rgba(15, 23, 42, 0.06);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: var(--font-sans);
                background-color: var(--color-bg);
                color: var(--color-text);
                line-height: 1.5;
                min-height: 100vh;
            }

            .dark body {
                background-color: var(--color-bg-dark);
                color: var(--color-text-dark);
            }

            .container { max-width: 72rem; margin: 0 auto; padding: 0 1rem; }
            .min-h-screen { min-height: 100vh; }
            .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
            .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
            .px-4 { padding-left: 1rem; padding-right: 1rem; }
            .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
            .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
            .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
            .mb-4 { margin-bottom: 1rem; }
            .mb-6 { margin-bottom: 1.5rem; }
            .mt-4 { margin-top: 1rem; }
            .mt-6 { margin-top: 1.5rem; }

            .flex { display: flex; }
            .items-center { align-items: center; }
            .justify-between { justify-content: space-between; }
            .gap-2 { gap: 0.5rem; }
            .gap-4 { gap: 1rem; }

            .text-center { text-align: center; }
            .text-sm { font-size: 0.875rem; }
            .text-base { font-size: 1rem; }
            .text-lg { font-size: 1.125rem; }
            .text-xl { font-size: 1.25rem; }
            .text-2xl { font-size: 1.5rem; }
            .font-medium { font-weight: 500; }
            .font-semibold { font-weight: 600; }
            .font-bold { font-weight: 700; }

            .border { border: 1px solid var(--color-border); }
            .border-l-4 { border-left: 4px solid var(--color-primary); }
            .dark .border { border-color: var(--color-border-dark); }

            .bg-white { background-color: #ffffff; }
            .bg-gray-50 { background-color: #f9fafb; }
            .bg-green-100 { background-color: #dcfce7; }
            .bg-blue-50 { background-color: #eff6ff; }

            .dark .bg-gray-50 { background-color: #1f2937; }
            .dark .bg-green-100 { background-color: #064e3b; }
            .dark .bg-blue-50 { background-color: #1e3a8a; }

            .text-green-800 { color: #166534; }
            .text-blue-800 { color: #1e40af; }
            .text-gray-600 { color: var(--color-text-secondary); }

            .dark .text-green-800 { color: #86efac; }
            .dark .text-blue-800 { color: #93c5fd; }
            .dark .text-gray-600 { color: var(--color-text-secondary-dark); }

            .rounded-lg { border-radius: 0.5rem; }
            .rounded-full { border-radius: 9999px; }

            .shadow-md { box-shadow: var(--shadow-md); }
            .shadow-lg { box-shadow: var(--shadow-lg); }

            .whitespace-pre-wrap { white-space: pre-wrap; }

            .cursor-pointer { cursor: pointer; }
            .transition { transition: all 0.2s ease; }

            .max-w-6xl { max-width: 72rem; }
            .mx-auto { margin-left: auto; margin-right: auto; }

            .status-badge {
                display: inline-flex;
                align-items: center;
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.75rem;
                font-weight: 500;
            }

            .status-read {
                background-color: var(--color-success);
                color: #166534;
            }

            .dark .status-read {
                background-color: #064e3b;
                color: #86efac;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                border: 1px solid var(--color-border);
                background-color: transparent;
                color: var(--color-text);
                font-size: 0.875rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.2s ease;
                cursor: pointer;
            }

            .btn:hover {
                background-color: var(--color-text);
                color: var(--color-bg);
            }

            .dark .btn {
                border-color: var(--color-border-dark);
                color: var(--color-text-dark);
            }

            .dark .btn:hover {
                background-color: var(--color-text-dark);
                color: var(--color-bg-dark);
            }

            .btn-primary {
                background-color: var(--color-primary);
                color: white;
                border-color: var(--color-primary);
            }

            .btn-primary:hover {
                background-color: #d42d02;
                border-color: #d42d02;
            }

            .message-content {
                background-color: var(--color-bg);
                border: 1px solid var(--color-border);
                border-radius: 0.5rem;
                padding: 1.5rem;
                margin: 1rem 0;
                box-shadow: var(--shadow-sm);
            }

            .dark .message-content {
                background-color: var(--color-card-bg-dark);
                border-color: var(--color-border-dark);
            }

            .message-header {
                border-bottom: 1px solid var(--color-border);
                padding-bottom: 1rem;
                margin-bottom: 1rem;
            }

            .dark .message-header {
                border-color: var(--color-border-dark);
            }

            .message-meta {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
                margin-bottom: 1rem;
            }

            .meta-item {
                display: flex;
                flex-direction: column;
            }

            .meta-label {
                font-size: 0.75rem;
                font-weight: 500;
                color: var(--color-text-secondary);
                text-transform: uppercase;
                letter-spacing: 0.05em;
                margin-bottom: 0.25rem;
            }

            .dark .meta-label {
                color: var(--color-text-secondary-dark);
            }

            .meta-value {
                font-size: 0.875rem;
                color: var(--color-text);
            }

            .dark .meta-value {
                color: var(--color-text-dark);
            }

            .message-body {
                line-height: 1.7;
                color: var(--color-text-muted);
            }

            .dark .message-body {
                color: var(--color-text-muted-dark);
            }
        </style>
    </head>
    <body class="min-h-screen px-6 py-8">
        <div class="container">
            <header class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-[#1b1b18] dark:text-[#fdfdfc]">📬 Detail Pesan</h1>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">{{ $message->subject }}</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="{{ route('admin.messages.index') }}" class="btn">← Kembali ke Daftar</a>
                        <button onclick="toggleDarkMode()" class="btn">
                            <span id="dark-mode-icon">🌙</span>
                        </button>
                    </div>
                </div>
            </header>

            <main>
                <div class="message-content">
                    <div class="message-header">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold">{{ $message->subject }}</h2>
                            <span class="status-badge status-read">✓ Dibaca</span>
                        </div>

                        <div class="message-meta">
                            <div class="meta-item">
                                <span class="meta-label">Pengirim</span>
                                <span class="meta-value">{{ $message->name }}</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Email</span>
                                <a href="mailto:{{ $message->email }}" class="meta-value text-[#f53003] hover:underline">{{ $message->email }}</a>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Tanggal Diterima</span>
                                <span class="meta-value">{{ $message->created_at->format('l, d F Y H:i') }}</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Status</span>
                                <span class="meta-value">
                                    @if($message->read_at)
                                        Dibaca pada {{ $message->read_at->format('d/m/Y H:i') }}
                                    @else
                                        Belum dibaca
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="message-body">
                        <h3 class="font-semibold mb-3 text-[#1b1b18] dark:text-[#fdfdfc]">Pesan:</h3>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 whitespace-pre-wrap">
                            {{ $message->message }}
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex gap-4">
                    <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn btn-primary">
                        💌 Balas Email
                    </a>
                    <a href="https://wa.me/?text=Halo {{ $message->name }}, terima kasih telah menghubungi saya. Saya telah menerima pesan Anda tentang '{{ $message->subject }}' dan akan segera menghubungi Anda." target="_blank" rel="noopener" class="btn">
                        💬 Hubungi via WhatsApp
                    </a>
                    <button onclick="window.print()" class="btn">
                        🖨️ Print Pesan
                    </button>
                </div>
            </main>
        </div>

        <script>
            function toggleDarkMode() {
                document.body.classList.toggle('dark');
                const icon = document.getElementById('dark-mode-icon');
                icon.textContent = document.body.classList.contains('dark') ? '☀️' : '🌙';
                localStorage.setItem('darkMode', document.body.classList.contains('dark'));
            }

            // Load dark mode preference
            if (localStorage.getItem('darkMode') === 'true') {
                document.body.classList.add('dark');
                document.getElementById('dark-mode-icon').textContent = '☀️';
            }
        </script>
    </body>
</html>