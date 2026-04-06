@extends('layouts.app')

@section('title', 'Faculty & Staff Directory – UCC IT')
@section('topbar-title', 'Faculty & Staff')
@section('back', true)

@section('content')

<div class="page-body">
    @foreach ($staff as $member)
    <div class="staff-card">
        <div class="staff-avatar">
            @if ($member['photo'])
                <img src="{{ asset('images/staff/' . $member['photo']) }}"
                     alt="{{ $member['name'] }}" />
            @else
                <span>{{ $member['initials'] }}</span>
            @endif
        </div>
        <div class="staff-info">
            <div class="staff-name">{{ $member['name'] }}</div>
            <div class="staff-role">{{ $member['role'] }}</div>
            <div class="staff-actions">
                <a class="action-btn action-btn--call"
                   href="tel:{{ $member['phone'] }}">
                   📞 {{ $member['phone'] }}
                </a>
                <a class="action-btn action-btn--email"
                   href="mailto:{{ $member['email'] }}">
                   ✉️ Email
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
