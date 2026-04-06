@extends('layouts.app')

@section('title', 'Courses – UCC IT')
@section('topbar-title', 'Courses')
@section('back', true)

@section('content')

    <div class="page-body">
        <div class="container" style="margin: 24px">

            <!-- Filter bar -->
            <div class="filter-bar">
                <input type="text" id="search" placeholder="🔍  Search courses by name or code…"
                    oninput="filterCourses()" />
                <span class="course-count" id="course-count">10 courses</span>
            </div>

            <!-- Course grid -->
            <div class="courses-grid" id="courses-grid">

                @forelse ($courses as $course)
                    <div class="course-card">
                        <div class="course-header">
                            <span class="course-code">{{ $course->code }}</span>
                            <span class="course-credits">{{ $course->credits }} cr</span>
                        </div>
                        <div class="course-body">
                            <div class="course-name">{{ $course->name }}</div>
                            <div class="course-desc">{{ $course->description }}</div>
                            <div class="course-prereq">
                                <span class="prereq-label">Pre-req:</span>
                                <span class="prereq-val">{{ $course->prerequisites }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="empty-state">No courses found. Run <code>php artisan db:seed</code> to populate.</p>
                @endforelse

            </div><!-- /courses-grid -->
        </div>
    </div>


@endsection
