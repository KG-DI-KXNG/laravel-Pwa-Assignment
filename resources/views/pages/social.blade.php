@extends('layouts.app')

@section('title', 'Social Media – UCC IT')
@section('topbar-title', 'Social Media')
@section('back', true)

@section('content')

<div class="social-tabs" role="tablist">
    <button class="social-tab social-tab--active"
            role="tab" aria-selected="true"
            onclick="showTab('facebook', this)">
        Facebook
    </button>
    <button class="social-tab"
            role="tab" aria-selected="false"
            onclick="showTab('twitter', this)">
        Twitter
    </button>
    <button class="social-tab"
            role="tab" aria-selected="false"
            onclick="showTab('instagram', this)">
        Instagram
    </button>
</div>

<div class="social-panels">

    {{-- Facebook --}}
    <div id="panel-facebook" class="social-panel social-panel--active">
        <iframe
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FUCCJamaica&tabs=timeline&width=400&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false"
            width="100%" height="500"
            style="border:none;overflow:hidden"
            scrolling="no" frameborder="0"
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            title="UCC Facebook Page">
        </iframe>
        <a class="social-open-link" href="{{ $accounts['facebook'] }}" target="_blank" rel="noopener">
            Open Facebook &rarr;
        </a>
    </div>

    {{-- Twitter / X --}}
    <div id="panel-twitter" class="social-panel">
        <a class="twitter-timeline"
           data-height="500"
           href="{{ $accounts['twitter'] }}">
           Tweets by UCCJamaica
        </a>
        <a class="social-open-link" href="{{ $accounts['twitter'] }}" target="_blank" rel="noopener">
            Open Twitter &rarr;
        </a>
    </div>

    {{-- Instagram --}}
    <div id="panel-instagram" class="social-panel">
        <p class="social-ig-note">
            Instagram does not support embedded timelines. Tap the button below to view UCC's profile in-browser.
        </p>
        <a class="social-open-link social-open-link--ig"
           href="{{ $accounts['instagram'] }}" target="_blank" rel="noopener">
            Open Instagram &rarr;
        </a>
    </div>

</div>

@endsection

@push('scripts')
{{-- Twitter widget script --}}
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script>
function showTab(name, btn) {
    // Hide all panels
    document.querySelectorAll('.social-panel').forEach(p => p.classList.remove('social-panel--active'));
    document.querySelectorAll('.social-tab').forEach(t => {
        t.classList.remove('social-tab--active');
        t.setAttribute('aria-selected', 'false');
    });

    // Show selected panel
    document.getElementById('panel-' + name).classList.add('social-panel--active');
    btn.classList.add('social-tab--active');
    btn.setAttribute('aria-selected', 'true');
}
</script>
@endpush
