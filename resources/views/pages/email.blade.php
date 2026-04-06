@extends('layouts.app')

@section('title', 'Email the HOD – UCC IT')
@section('topbar-title', 'Email the HOD')
@section('back', true)

@section('content')

<div class="page-body">

    <div class="email-intro">
        <div class="email-intro__avatar">HOD</div>
        <div>
            <div class="email-intro__name">Dr. Marcus Reid</div>
            <div class="email-intro__addr">hod.it@ucc.edu.jm</div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('email.send') }}" method="POST" class="email-form">
        @csrf

        <div class="form-group">
            <label class="form-label" for="sender_name">Your Name</label>
            <input class="form-input" type="text" id="sender_name"
                   name="sender_name" value="{{ old('sender_name') }}"
                   placeholder="Full name" required />
        </div>

        <div class="form-group">
            <label class="form-label" for="sender_email">Your Email</label>
            <input class="form-input" type="email" id="sender_email"
                   name="sender_email" value="{{ old('sender_email') }}"
                   placeholder="your@email.com" required />
        </div>

        <div class="form-group">
            <label class="form-label" for="subject">Subject</label>
            <input class="form-input" type="text" id="subject"
                   name="subject" value="{{ old('subject') }}"
                   placeholder="e.g. Course Enquiry" required />
        </div>

        <div class="form-group">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-input form-textarea" id="message"
                      name="message" rows="5"
                      placeholder="Type your message here…" required>{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="submit-btn">Send Message &rarr;</button>
    </form>

</div>

@endsection
