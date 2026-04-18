<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pesan Kontak - Admin</title>
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
                --color-warning: #f59e0b;
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
            .mb-4 { margin-bottom: 1rem; }
            .mb-6 { margin-bottom: 1.5rem; }
            .mt-4 { margin-top: 1rem; }

            .flex { display: flex; }
            .items-center { align-items: center; }
            .justify-between { justify-content: space-between; }
            .justify-center { justify-content: center; }
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
            .border-b { border-bottom: 1px solid var(--color-border); }
            .dark .border { border-color: var(--color-border-dark); }
            .dark .border-b { border-color: var(--color-border-dark); }

            .bg-white { background-color: #ffffff; }
            .bg-gray-50 { background-color: #f9fafb; }
            .bg-green-100 { background-color: #dcfce7; }
            .bg-yellow-100 { background-color: #fef3c7; }

            .dark .bg-gray-50 { background-color: #1f2937; }
            .dark .bg-green-100 { background-color: #064e3b; }
            .dark .bg-yellow-100 { background-color: #78350f; }

            .text-green-800 { color: #166534; }
            .text-yellow-800 { color: #92400e; }
            .text-gray-600 { color: var(--color-text-secondary); }

            .dark .text-green-800 { color: #86efac; }
            .dark .text-yellow-800 { color: #fbbf24; }
            .dark .text-gray-600 { color: var(--color-text-secondary-dark); }

            .rounded-lg { border-radius: 0.5rem; }
            .rounded-full { border-radius: 9999px; }

            .shadow-md { box-shadow: var(--shadow-md); }

            .cursor-pointer { cursor: pointer; }
            .transition { transition: all 0.2s ease; }

            .hover\:bg-gray-50:hover { background-color: #f9fafb; }
            .dark .hover\:bg-gray-50:hover { background-color: #1f2937; }

            .max-w-6xl { max-width: 72rem; }
            .mx-auto { margin-left: auto; margin-right: auto; }

            .table {
                width: 100%;
                border-collapse: collapse;
            }

            .table th,
            .table td {
                padding: 0.75rem 1rem;
                text-align: left;
                border-bottom: 1px solid var(--color-border);
            }

            .dark .table th,
            .dark .table td {
                border-color: var(--color-border-dark);
            }

            .table th {
                font-weight: 600;
                background-color: var(--color-bg);
            }

            .dark .table th {
                background-color: var(--color-bg-dark);
            }

            .status-badge {
                display: inline-flex;
                align-items: center;
                padding: 0.25rem 0.75rem;
                border-radius: 9999px;
                font-size: 0.75rem;
                font-weight: 500;
            }

            .status-unread {
                background-color: var(--color-warning);
                color: #92400e;
            }

            .status-read {
                background-color: var(--color-success);
                color: #166534;
            }

            .dark .status-unread {
                background-color: #78350f;
                color: #fbbf24;
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

            .pagination {
                display: flex;
                justify-content: center;
                gap: 0.5rem;
                margin-top: 2rem;
            }

            .pagination a,
            .pagination span {
                padding: 0.5rem 0.75rem;
                border: 1px solid var(--color-border);
                border-radius: 0.375rem;
                text-decoration: none;
                color: var(--color-text);
                transition: all 0.2s ease;
            }

            .dark .pagination a,
            .dark .pagination span {
                border-color: var(--color-border-dark);
                color: var(--color-text-dark);
            }

            .pagination a:hover {
                background-color: var(--color-text);
                color: var(--color-bg);
            }

            .dark .pagination a:hover {
                background-color: var(--color-text-dark);
                color: var(--color-bg-dark);
            }

            .pagination .active {
                background-color: var(--color-primary);
                color: white;
                border-color: var(--color-primary);
            }
        </style>
    </head>
    <body class="min-h-screen px-6 py-8">
        <div class="container">
            <header class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-[#1b1b18] dark:text-[#fdfdfc]">📬 Pesan Kontak</h1>
                        <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Kelola pesan yang dikirim melalui form kontak</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="/" class="btn">← Kembali ke Website</a>
                        <button onclick="toggleDarkMode()" class="btn">
                            <span id="dark-mode-icon">🌙</span>
                        </button>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold">Total Pesan: {{ $messages->total() }}</h2>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Pesan belum dibaca: {{ $messages->whereNull('read_at')->count() }}
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-600 dark:text-gray-400">Halaman {{ $messages->currentPage() }} dari {{ $messages->lastPage() }}</p>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @if($messages->count() > 0)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Subjek</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td>
                                            @if($message->read_at)
                                                <span class="status-badge status-read">✓ Dibaca</span>
                                            @else
                                                <span class="status-badge status-unread">● Belum Dibaca</span>
                                            @endif
                                        </td>
                                        <td class="font-medium">{{ $message->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $message->email }}" class="text-[#f53003] hover:underline">
                                                {{ $message->email }}
                                            </a>
                                        </td>
                                        <td>{{ Str::limit($message->subject, 30) }}</td>
                                        <td class="text-sm text-gray-600 dark:text-gray-400">
                                            {{ $message->created_at->format('d/m/Y H:i') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-primary">
                                                Lihat Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        {{ $messages->links() }}
                    </div>
                @else
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-12 text-center">
                        <div class="text-6xl mb-4">📭</div>
                        <h3 class="text-xl font-semibold mb-2">Belum ada pesan</h3>
                        <p class="text-gray-600 dark:text-gray-400">Pesan dari form kontak akan muncul di sini.</p>
                    </div>
                @endif
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