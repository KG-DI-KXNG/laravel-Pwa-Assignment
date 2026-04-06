@extends('layouts.app')

@section('title', 'Faculty & Staff Directory – UCC IT')
@section('topbar-title', 'Faculty & Staff')
@section('back', true)

@section('content')


<!-- HERO -->
<section class="hero">
  <div class="container">

    <div class="left-col">
      <p class="subhead">University of the Commonwealth Caribbean</p>
      <h1>Meet the <span>IT</span> Team</h1>
      <p class="hero-desc">
        Get in touch with our faculty and staff directly — call or email any member
        straight from this page.
      </p>
      <div class="hero-cta">
        <a href="mailto:hod.it@ucc.edu.jm" class="primary-cta">✉️ Email the HOD</a>
      </div>
    </div>

    <!-- HOD spotlight -->
    <div class="hod-spotlight">
      <div class="hod-spotlight-label">Head of Department</div>
      <div class="hod-top">
        <div class="hod-avatar">MR</div>
        <div>
          <div class="hod-name">Dr. Marcus Reid</div>
          <div class="hod-role">Head of Department – Information Technology</div>
        </div>
      </div>
      <div class="hod-actions">
        <a href="tel:+18769298987" class="hod-btn call">📞 Call</a>
        <a href="mailto:hod.it@ucc.edu.jm" class="hod-btn email">✉️ Email</a>
      </div>
    </div>

  </div>
</section>

<!-- STAFF SECTION -->
<section class="staff-section">
  <div class="container">
    <div class="section-head">
      <p class="section-label">Faculty &amp; Staff</p>
      <h2 class="section-title">The Full Directory</h2>
    </div>

    <div class="staff-grid">

      <div class="staff-card">
        <div class="staff-avatar av-blue">TC</div>
        <div class="staff-name">Ms. Tamara Clarke</div>
        <div class="staff-role">Lecturer – Software Engineering</div>
        <div class="staff-actions">
          <a href="tel:+18769298988" class="action-btn call">📞 Call</a>
          <a href="mailto:t.clarke@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

      <div class="staff-card">
        <div class="staff-avatar av-green">DC</div>
        <div class="staff-name">Mr. Devon Campbell</div>
        <div class="staff-role">Lecturer – Networking</div>
        <div class="staff-actions">
          <a href="tel:+18769298989" class="action-btn call">📞 Call</a>
          <a href="mailto:d.campbell@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

      <div class="staff-card">
        <div class="staff-avatar av-purple">KB</div>
        <div class="staff-name">Ms. Kezia Brown</div>
        <div class="staff-role">Lecturer – Cybersecurity</div>
        <div class="staff-actions">
          <a href="tel:+18769298990" class="action-btn call">📞 Call</a>
          <a href="mailto:k.brown@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

      <div class="staff-card">
        <div class="staff-avatar av-rose">AW</div>
        <div class="staff-name">Mr. Andre Williams</div>
        <div class="staff-role">Laboratory Technician</div>
        <div class="staff-actions">
          <a href="tel:+18769298991" class="action-btn call">📞 Call</a>
          <a href="mailto:a.williams@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

      <div class="staff-card">
        <div class="staff-avatar av-teal">ST</div>
        <div class="staff-name">Ms. Sophia Thompson</div>
        <div class="staff-role">Administrative Officer</div>
        <div class="staff-actions">
          <a href="tel:+18769298992" class="action-btn call">📞 Call</a>
          <a href="mailto:s.thompson@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

      <div class="staff-card">
        <div class="staff-avatar av-gold">RJ</div>
        <div class="staff-name">Mr. Ricardo James</div>
        <div class="staff-role">Lecturer – Database Systems</div>
        <div class="staff-actions">
          <a href="tel:+18769298993" class="action-btn call">📞 Call</a>
          <a href="mailto:r.james@ucc.edu.jm" class="action-btn email">✉️ Email</a>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection
