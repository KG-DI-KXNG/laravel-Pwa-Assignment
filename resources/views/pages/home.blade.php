@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- ── HERO ── -->
<section class="hero">
  <div class="container">

    <div class="left-col">
      <p class="subhead">University of the Commonwealth Caribbean</p>
      <h1>A Reliable IT App <span></span></h1>
      <p class="hero-desc">
      Easily explore faculty profiles, IT courses, admission requirements,
       and contact options  all in one convenient location.
      
      </p>
      <div class="hero-cta">
        <a href="/directory" class="primary-cta">Explore Now</a>
        <a href="/admissions" class="watch-cta">
          <div class="play-circle">🎓</div>
          Apply to UCC
        </a>
      </div>
    </div>

    <!-- App preview card (like the illustration in the example) -->
    <div class="hero-card">
      <div class="hero-card-title">Quick Access</div>

      <a href="/directory" class="app-link">
        <div class="app-icon gold">👥</div>
        <div>
          <div class="app-text-label">Faculty &amp; Staff Directory</div>
          <div class="app-text-sub">Call or email staff directly</div>
        </div>
        <div class="app-arrow">›</div>
      </a>

      <a href="/courses" class="app-link">
        <div class="app-icon blue">📚</div>
        <div>
          <div class="app-text-label">Courses</div>
          <div class="app-text-sub">10 IT programmes offered</div>
        </div>
        <div class="app-arrow">›</div>
      </a>

      <a href="/admissions" class="app-link">
        <div class="app-icon green">🎓</div>
        <div>
          <div class="app-text-label">Admissions</div>
          <div class="app-text-sub">Requirements &amp; apply online</div>
        </div>
        <div class="app-arrow">›</div>
      </a>

      <a href="/social" class="app-link">
        <div class="app-icon purple">📲</div>
        <div>
          <div class="app-text-label">Social Media</div>
          <div class="app-text-sub">Facebook · Twitter · Instagram</div>
        </div>
        <div class="app-arrow">›</div>
      </a>

      <a href="/email" class="app-link">
        <div class="app-icon rose">✉️</div>
        <div>
          <div class="app-text-label">Email the HOD</div>
          <div class="app-text-sub">Send a message directly</div>
        </div>
        <div class="app-arrow">›</div>
      </a>
    </div>

  </div>
</section>

<!-- ── FEATURES ── -->
<section class="features-section">
  <div class="container">

    <ul class="features-list">
      <li><span class="feat-dot"></span> Faculty &amp; Staff Directory with direct call &amp; email</li>
      <li><span class="feat-dot"></span> 10 IT Courses stored in a live database</li>
      <li><span class="feat-dot"></span> Full Admissions requirements &amp; UCC apply link</li>
      <li><span class="feat-dot"></span> In-app Social Media (Facebook, Twitter, Instagram)</li>
      <li><span class="feat-dot"></span> Email FAB to reach the HOD instantly</li>
      <li><span class="feat-dot"></span> Offline-ready Progressive Web App (PWA)</li>
    </ul>

    <!-- Decorative dark card replacing the photo -->
    <div class="features-img">
      <div class="fi-label">Department Stats</div>

      <div class="fi-row">
        <div class="fi-circle">👥</div>
        <div>
          <div class="fi-text">Faculty &amp; Staff</div>
          <div class="fi-sub">6 members</div>
        </div>
      </div>
      <div class="fi-bar"><div class="fi-bar-fill" style="width:60%"></div></div>

      <div class="fi-row">
        <div class="fi-circle">📚</div>
        <div>
          <div class="fi-text">IT Courses</div>
          <div class="fi-sub">10 programmes</div>
        </div>
      </div>
      <div class="fi-bar"><div class="fi-bar-fill" style="width:100%"></div></div>

      <div class="fi-row">
        <div class="fi-circle">🎓</div>
        <div>
          <div class="fi-text">Admissions Open</div>
          <div class="fi-sub">Apply by April 30</div>
        </div>
      </div>
      <div class="fi-bar"><div class="fi-bar-fill" style="width:78%"></div></div>

      <div class="fi-row">
        <div class="fi-circle">📲</div>
        <div>
          <div class="fi-text">Social Platforms</div>
          <div class="fi-sub">FB · Twitter · Instagram</div>
        </div>
      </div>
      <div class="fi-bar"><div class="fi-bar-fill" style="width:45%"></div></div>
    </div>

  </div>
</section>

@endsection
