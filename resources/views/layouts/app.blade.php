<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="theme-color" content="#0a1628" />
    <meta name="description" content="UCC IT Department – Faculty, Courses, Admissions & More" />

    <title>@yield('title', 'UCC IT Department')</title>

    {{-- PWA Manifest (published by erag/laravel-pwa) --}}
    <link rel="manifest" href="/manifest.json" />

    {{-- App Icons --}}
    <link rel="apple-touch-icon" href="/icons/icon-192.png" />
    <link rel="icon" type="image/png" href="/icons/icon-192.png" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />

    {{-- Main stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @stack('styles')
</head>
<body>

    {{-- Top Navigation Bar --}}
    <header class="topbar">
        @hasSection('back')
            <a href="{{ url()->previous() }}" class="topbar-back" aria-label="Go back">&#8592;</a>
        @endif
        <div class="topbar-brand">
            <span class="topbar-logo">UCC</span>
            <div>
                <div class="topbar-title">@yield('topbar-title', 'IT Department')</div>
                <div class="topbar-sub">University of the Commonwealth Caribbean</div>
            </div>
        </div>
    </header>

    {{-- Page Content --}}
    <main class="main-content">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    {{-- Email FAB (Floating Action Button) – present on every page --}}
    <a href="{{ route('email.create') }}" class="fab" title="Email the HOD" aria-label="Email HOD">
        ✉
    </a>

    {{-- PWA Service Worker Registration (erag/laravel-pwa) --}}
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then(() => console.log('UCC PWA: Service Worker registered.'))
                .catch(err => console.error('SW registration failed:', err));
        }
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
