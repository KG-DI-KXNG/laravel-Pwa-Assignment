<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="theme-color" content="#0a1628" />

    {{-- PWA HEAD --}}
    @PwaHead
    <title>@yield('title', 'UCC IT Department')</title>

    {{-- App Icons --}}
    <link rel="apple-touch-icon" href="{{ asset('icons/icon-192.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('icons/icon-192.png') }}" />

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   
    <style>
        body {
            overscroll-behavior: none;
        }
    </style>
    @stack('styles')
</head>

<body>

    <!-- ── NAVBAR ── -->
    <div class="navbar">
        <div class="container">
            <a class="logo" href="/"></a>
                <div class="logo-badge">UCC</div>
            </a>

            <img id="mobile-cta" class="mobile-menu" src="https://assets.codepen.io/2621168/menu.svg" alt="Open menu">

            <nav>
                <ul class="primary-nav">
                    <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ request()->is('courses') ? 'current' : '' }}"><a href="/courses">Courses</a></li>
                    <li class="{{ request()->is('admissions') ? 'current' : '' }}"><a href="/admissions">Admissions</a></li>
                    <li class="{{ request()->is('social') ? 'current' : '' }}"><a href="/social">Social</a></li>
                </ul>
                <ul class="secondary-nav">
                    <li class="{{ request()->is('directory') ? 'current' : '' }}"><a href="/directory ">Directory</a></li>
                    <li class="email-cta"><a href="mailto:hod@ucc.edu">✉ Email HOD</a></li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Page Content --}}
    <main class="main-content">
        @yield('content')
    </main>


    @stack('scripts')
    {{-- Service Worker --}}
    @RegisterServiceWorkerScript
</body>

</html>
