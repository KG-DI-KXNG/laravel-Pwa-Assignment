@extends('layouts.app')

@section('title', 'Admissions – UCC IT')
@section('topbar-title', 'Admissions')
@section('back', true)

@section('content')

<div class="page-body">

    <div class="admit-section">
        <h2 class="admit-section__title">About the Programme</h2>
        <p class="admit-section__body">
            The Bachelor of Science in Information Technology is a 3-year full-time programme
            designed to equip students with hands-on technical and analytical skills for careers
            in software development, networking, cybersecurity, and IT management.
        </p>
    </div>

    <div class="admit-section">
        <h2 class="admit-section__title">Minimum Entry Requirements</h2>
        <ul class="admit-list">
            @foreach ($requirements as $req)
                <li class="admit-list__item">{{ $req }}</li>
            @endforeach
        </ul>
    </div>

    <div class="admit-section">
        <h2 class="admit-section__title">Application Deadlines</h2>
        <ul class="admit-list">
            @foreach ($deadlines as $semester => $date)
                <li class="admit-list__item">
                    <strong>{{ $semester }}:</strong> {{ $date }}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="admit-section">
        <h2 class="admit-section__title">Required Documents</h2>
        <ul class="admit-list">
            @foreach ($documents as $doc)
                <li class="admit-list__item">{{ $doc }}</li>
            @endforeach
        </ul>
    </div>

    <a class="apply-btn"
       href="https://www.ucc.edu.jm/admissions"
       target="_blank"
       rel="noopener noreferrer">
        Apply at UCC &rarr;
    </a>

</div>

@endsection
