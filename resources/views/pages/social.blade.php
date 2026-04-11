@extends('layouts.app')

@section('title', 'Social Media – UCC IT')
@section('topbar-title', 'Social Media')
@section('back', true)

@section('content')

    <section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">University of the Commonwealth Caribbean</p>
                <h1>UCC on <span>Social</span> Media</h1>
                <p class="hero-desc">
                    Stay connected with the UCC IT Department — follow us on Facebook,
                    Twitter, and Instagram for news, events, and updates.
                </p>
            </div>
            <div class="platform-pills">
                <div class="platform-pill active" onclick="showTab('facebook', this)">
                    <div class="pill-icon fb">📘</div>
                    <div>
                        <div class="pill-name">Facebook</div>
                        <div class="pill-handle">UCCJamaica</div>
                    </div>
                    <div class="pill-arrow">›</div>
                </div>
                <div class="platform-pill" onclick="showTab('twitter', this)">
                    <div class="pill-icon tw">🐦</div>
                    <div>
                        <div class="pill-name">Twitter / X</div>
                        <div class="pill-handle">@UCCJamaica</div>
                    </div>
                    <div class="pill-arrow">›</div>
                </div>
                <div class="platform-pill" onclick="showTab('instagram', this)">
                    <div class="pill-icon ig">📸</div>
                    <div>
                        <div class="pill-name">Instagram</div>
                        <div class="pill-handle">@ucc_jamaica</div>
                    </div>
                    <div class="pill-arrow">›</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL SECTION -->
    <section class="social-section">
        <div class="container">

            <div class="section-head">
                <p class="section-label">Live Feeds</p>
                <h2 class="section-title">Follow UCC Online</h2>
            </div>

            <!-- Tabs -->
            <div class="social-tabs" role="tablist">
                <button class="social-tab social-tab--active" role="tab" aria-selected="true"
                    onclick="showTab('facebook', this)">📘 Facebook</button>
                <button class="social-tab" role="tab" aria-selected="false" onclick="showTab('twitter', this)">🐦
                    Twitter</button>
                <button class="social-tab" role="tab" aria-selected="false" onclick="showTab('instagram', this)">📸
                    Instagram</button>
            </div>

            <!-- Panels -->
            <div class="social-panels">

                <!-- Facebook -->
                <div id="panel-facebook" class="social-panel social-panel--active">
                    <div class="embed-wrap">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUCCJamaica&tabs=timeline&width=800&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false"
                            height="500" scrolling="no"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                            title="UCC Facebook Page">
                        </iframe>
                    </div>
                    <a class="social-open-link" href="https://www.facebook.com/UCCJamaica" target="_blank" rel="noopener">
                        Open Facebook →
                    </a>
                </div>

                <!-- Twitter -->
                <div id="panel-twitter" class="social-panel">
                    <div class="embed-wrap" style="padding: 16px;">
                        <a class="twitter-timeline" data-height="480" href="https://twitter.com/UCCJamaica">
                            Tweets by UCCJamaica
                        </a>
                    </div>
                    <a class="social-open-link" href="https://twitter.com/UCCJamaica" target="_blank" rel="noopener">
                        Open Twitter →
                    </a>
                </div>

                <!-- Instagram -->
                <div id="panel-instagram" class="social-panel">
                    <div class="ig-fallback">
                        <p>Instagram doesn't support embedded timelines. Tap below to view UCC's profile directly in your
                            browser.</p>
                        <a class="ig-open-btn" href="https://www.instagram.com/ucc_jamaica" target="_blank" rel="noopener">
                            📸 Open Instagram →
                        </a>
                    </div>
                </div>

            </div><!-- /social-panels -->
        </div>
    </section>

@endsection

@push('scripts')
    {{-- Twitter widget script --}}
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <script>
        function showTab(name, btn) {
            // panels
            document.querySelectorAll('.social-panel').forEach(p => p.classList.remove('social-panel--active'));
            document.getElementById('panel-' + name).classList.add('social-panel--active');

            // tabs
            document.querySelectorAll('.social-tab').forEach(t => {
                t.classList.remove('social-tab--active');
                t.setAttribute('aria-selected', 'false');
            });

            // hero pills
            document.querySelectorAll('.platform-pill').forEach(p => p.classList.remove('active'));

            // activate clicked
            const idx = ['facebook', 'twitter', 'instagram'].indexOf(name);

            if (btn.classList.contains('social-tab')) {
                btn.classList.add('social-tab--active');
                btn.setAttribute('aria-selected', 'true');

                const pills = document.querySelectorAll('.platform-pill');
                if (pills[idx]) pills[idx].classList.add('active');

            } else {
                btn.classList.add('active');

                const tabs = document.querySelectorAll('.social-tab');
                if (tabs[idx]) {
                    tabs[idx].classList.add('social-tab--active');
                    tabs[idx].setAttribute('aria-selected', 'true');
                }
            }
        }
    </script>
@endpush 
