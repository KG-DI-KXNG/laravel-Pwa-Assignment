@extends('layouts.app')

@section('title', 'UCC IT Department')
@section('topbar-title', 'IT Department')

@section('content')

<section class="home-hero">
    <h1 class="home-heading">Welcome to the<br>IT Department</h1>
    <p class="home-sub">Your gateway to faculty, courses, admissions, and more.</p>
</section>

<nav class="menu-grid" aria-label="Main menu">

    <a href="{{ route('directory') }}" class="menu-card menu-card--gold">
        <div class="menu-card__icon">👥</div>
        <div class="menu-card__label">Faculty &amp; Staff Directory</div>
        <div class="menu-card__sub">Call or email staff directly</div>
    </a>

    <a href="{{ route('courses') }}" class="menu-card menu-card--blue">
        <div class="menu-card__icon">📚</div>
        <div class="menu-card__label">Courses</div>
        <div class="menu-card__sub">10 IT programmes</div>
    </a>

    <a href="{{ route('admissions') }}" class="menu-card menu-card--green">
        <div class="menu-card__icon">🎓</div>
        <div class="menu-card__label">Admissions</div>
        <div class="menu-card__sub">Requirements &amp; apply online</div>
    </a>

    <a href="{{ route('social') }}" class="menu-card menu-card--purple">
        <div class="menu-card__icon">📲</div>
        <div class="menu-card__label">Social Media</div>
        <div class="menu-card__sub">Facebook · Twitter · Instagram</div>
    </a>

</nav>

@endsection
