@extends('layouts.app')

@section('title', 'Faculty & Staff Directory')
@push('styles')
    <link rel="stylesheet" href="css/button-animation.css">
@endpush

@section('content')


    <!-- HERO -->
    <section class="hero">
        <div class="container">

            <div class="left-col">
                <p class="subhead">University of the Commonwealth Caribbean</p>
                <h1>Duo 6 <span>Assignment</span></h1>
                <p class="hero-desc">
                    Welcome to Kevando and AnnaKay's Internet Authoring 2 Major Project! Explore our faculty, courses,
                    admissions, and social media all in one place. Your IT journey starts here.

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
                <div class="view-toggle">
                    <button class="grid-list">
                        <div class="icon">
                            <div class="dots">
                                <i></i><i></i><i></i><i></i>
                            </div>
                            <div class="lines">
                                <i></i><i></i><i></i><i></i>
                            </div>
                        </div>
                        <div class="text">
                            <span>Grid</span>
                            <span>List</span>
                        </div>
                    </button>
                </div>
            </div>

            <div id="gridView" class="staff-grid">
                @php
                    $colors = ['av-blue', 'av-gold', 'av-green', 'av-purple', 'av-teal', 'av-rose'];
                @endphp

                @forelse ($staff as $member)
                    <div class="staff-card">
                        <div class="staff-avatar {{ $colors[array_rand($colors)] }}">{{ substr($member->name, 0, 2) }}</div>
                        <div class="staff-name">{{ $member->name }}</div>
                        <div class="staff-role">{{ $member->role }}</div>
                        <div class="staff-actions">
                            <a href="tel:{{ $member->phone }}" class="action-btn call">📞 Call</a>
                            <a href="mailto:{{ $member->email }}" class="action-btn email">✉️ Email</a>
                        </div>
                    </div>
                @empty
                    <p>No staff members found.</p>
                @endforelse

            </div>

            <table id="tableView" class="dir-table" style="display:none;">
                <thead>
                    <tr>
                        <th>Name &amp; Role</th>
                        <th class="col-phone">Phone</th>
                        <th class="col-email-text">Email</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody id="dir-body">
                    @forelse ($staff as $member)
                        <tr>
                            <td>
                                <div class="name-cell">
                                    <div class="td-avatar {{ $colors[array_rand($colors)] }}">
                                        {{ substr($member->name, 0, 2) }}</div>
                                    <div>
                                        <div class="td-name">{{ $member->name }}</div>
                                        <div class="td-role">{{ $member->role }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="col-phone">{{ $member->phone }}</td>
                            <td class="col-email-text">{{ $member->email }}</td>
                            <td>
                                <div class="td-actions">
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $member->phone) }}"
                                        class="action-btn call">📞 Call</a>
                                    <a href="mailto:{{ $member->email }}" class="action-btn email">✉️ Email</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align:center;padding:40px;color:#888;">
                                No staff members found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>


@endsection
@push('scripts')
    <script>
        const gridView = document.getElementById('gridView');
        const tableView = document.getElementById('tableView');

        document.querySelectorAll('.grid-list').forEach(button => button.addEventListener('click', toggle));

        function toggle() {
            let btn = this;
            console.log(btn);
            if (gridView.style.display === 'none') {
                gridView.style.display = 'grid';
                tableView.style.display = 'none';
            } else {
                gridView.style.display = 'none';
                tableView.style.display = 'table';
            }
            btn.classList.add('animation');
            btn.classList.toggle('active');
            let newElem = btn.cloneNode(true);
            btn.parentNode.replaceChild(newElem, btn);
            newElem.addEventListener('click', toggle);
        }
    </script>
@endpush
