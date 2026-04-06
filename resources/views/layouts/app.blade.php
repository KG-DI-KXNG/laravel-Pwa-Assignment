<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="theme-color" content="#0a1628" />
    <meta name="description" content="UCC IT Department – Faculty, Courses, Admissions & More" />

    <title>@yield('title', 'UCC IT Department')</title>

    {{-- PWA Manifest --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}" />

    {{-- App Icons --}}
    <link rel="apple-touch-icon" href="{{ asset('icons/icon-192.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('icons/icon-192.png') }}" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- PWA HEAD --}}
    @PwaHead
    <style>
        body {
            overscroll-behavior: none;
        }
    </style>
    @stack('styles')
</head>

<body>

    {{-- Top Navigation Bar --}}

    <!-- ── NAVBAR ── -->
    <div class="navbar">
        <div class="container">
            <a class="logo" href="index.html">
                <div class="logo-badge">UCC</div>
                IT <span>Department</span>
            </a>

            <img id="mobile-cta" class="mobile-menu" src="https://assets.codepen.io/2621168/menu.svg" alt="Open menu">

            <nav>
                <ul class="primary-nav">
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="/courses">Courses</a></li>
                    <li><a href="/admissions">Admissions</a></li>
                    <li><a href="/social">Social</a></li>
                </ul>
                <ul class="secondary-nav">
                    <li><a href="/directory ">Directory</a></li>
                    <li class="email-cta"><a href="mailto:hod@ucc.edu">✉ Email HOD</a></li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Page Content --}}
    <main class="main-content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Floating Email Button --}}
    <a href="{{ route('email.create') }}" class="fab" aria-label="Email HOD">
        ✉
    </a>

    {{-- Service Worker --}}
    @RegisterServiceWorkerScript

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.getElementById('mobile-cta').addEventListener('click', function() {
            document.getElementById('main-nav').classList.add('open');
        });
        document.getElementById('mobile-exit').addEventListener('click', function() {
            document.getElementById('main-nav').classList.remove('open');
        });
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('sw.js').catch(() => {});
        }
    </script>
    @stack('scripts')
</body>

</html>
