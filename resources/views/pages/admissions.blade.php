@extends('layouts.app')

@section('title', 'Admissions – UCC IT')
@section('topbar-title', 'Admissions')
@section('back', true)

@section('content')


    <section class="hero">
        <div class="container">

            <!-- Left -->
            <div class="left-col">
                <p class="subhead">University of the Commonwealth Caribbean</p>
                <h1>Join the UCC <span>IT</span> Department</h1>
                <p class="hero-desc">
                    The B.Sc. Information Technology is a 3-year full-time programme built for careers
                    in software development, networking, cybersecurity, and IT management.
                </p>
                <a class="apply-btn" href="https://www.ucc.edu.jm/admissions" target="_blank" rel="noopener noreferrer">
                    🎓 Apply at UCC &rarr;
                </a>
            </div>

            <!-- Right: info cards -->
            <div class="admit-cards">

                <div class="admit-section">
                    <h2 class="admit-section__title">Minimum Entry Requirements</h2>
                    <ul class="admit-list">
                        <li class="admit-list__item">Five (5) CXC/CSEC passes including English Language and Mathematics
                        </li>
                        <li class="admit-list__item">Two (2) CAPE passes or equivalent A-Level qualifications</li>
                        <li class="admit-list__item">A pass in CSEC/CAPE Information Technology is strongly recommended</li>
                        <li class="admit-list__item">Applicants with a relevant Associate degree may be considered for
                            advanced entry</li>
                    </ul>
                </div>

                <div class="admit-section">
                    <h2 class="admit-section__title">Application Deadlines</h2>
                    <ul class="admit-list">
                        <li class="admit-list__item"><strong>Semester 1 (September intake):</strong> April 30 annually</li>
                        <li class="admit-list__item"><strong>Semester 2 (January intake):</strong> October 31 annually</li>
                    </ul>
                </div>

                <div class="admit-section">
                    <h2 class="admit-section__title">Required Documents</h2>
                    <ul class="admit-list">
                        <li class="admit-list__item">Certified copies of all academic certificates</li>
                        <li class="admit-list__item">Two (2) recent passport-size photographs</li>
                        <li class="admit-list__item">Valid government-issued photo ID or proof of citizenship</li>
                        <li class="admit-list__item">Application fee receipt from the Bursary</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

@endsection
