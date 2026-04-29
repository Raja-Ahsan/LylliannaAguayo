@extends('layouts.admin.app')
@section('title', $page_title ?? 'Dashboard')

@push('css')
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Bazar font (from website assets) - so dashboard can use it */
    @font-face {
        font-family: 'Bazar';
        src: url('{{ asset("public/assets/website/font/Bazar.ttf") }}') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    /* Dashboard: welcome banner + stat cards (theme: black + gold) */
    .pg-dash {
        min-height: calc(100vh - 100px);
        background: linear-gradient(180deg, #f8f6f2 0%, #f0ede8 100%);
        padding: 0 1.5rem 2.5rem;
    }

    /* Animated gradient banner */
    .pg-dash__banner {
        width: 100%;
        margin: 0 auto 2.5rem;
        padding: 4rem 2rem;
        background: linear-gradient(270deg, #1a1a1a, #2a0a1e, #1a1a1a, #0f0f0f);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        border-radius: 16px;
        border: 2px solid rgba(238, 183, 45, 0.3);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2), 0 0 60px rgba(238, 183, 45, 0.1);
        margin-top: 15px;
        position: relative;
        overflow: hidden;
    }

    /* Animated gradient background */
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Glowing border animation */
    .pg-dash__banner::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #EEB72D, #FFE59F, #EEB72D, #d4a020);
        background-size: 400% 400%;
        border-radius: 16px;
        z-index: -1;
        animation: borderGlow 8s ease infinite;
        opacity: 0.6;
    }

    @keyframes borderGlow {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    /* Floating particles effect */
    .pg-dash__banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 20% 30%, rgba(238, 183, 45, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(238, 183, 45, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 40% 80%, rgba(238, 183, 45, 0.06) 0%, transparent 50%);
        animation: particleFloat 20s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes particleFloat {
        0%, 100% { transform: translateY(0) scale(1); opacity: 0.3; }
        50% { transform: translateY(-20px) scale(1.1); opacity: 0.6; }
    }

    /* Welcome text with animations */
    .pg-dash__welcome {
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .pg-dash__welcome-title {
        font-family: 'Bazar', 'Oswald', sans-serif;
        font-weight: 700;
        font-size: 4rem;
        line-height: 1.2;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        background: linear-gradient(45deg, #EEB72D, #FFE59F, #EEB72D, #d4a020);
        background-size: 300% 300%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
        animation: welcomeGradient 4s ease infinite, welcomeFloat 3s ease-in-out infinite;
        filter: drop-shadow(0 0 20px rgba(238, 183, 45, 0.5));
    }

    @keyframes welcomeGradient {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @keyframes welcomeFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .pg-dash__welcome-subtitle {
        font-family: 'Oswald', sans-serif;
        font-size: 1.5rem;
        font-weight: 400;
        color: rgba(238, 183, 45, 0.9);
        margin-top: 1rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        animation: subtitlePulse 2s ease-in-out infinite;
    }

    @keyframes subtitlePulse {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 1; }
    }

    /* Decorative elements */
    .pg-dash__banner::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 120%;
        height: 120%;
        background: radial-gradient(circle, rgba(238, 183, 45, 0.1) 0%, transparent 70%);
        animation: decorPulse 4s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes decorPulse {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.3; }
        50% { transform: translate(-50%, -50%) scale(1.2); opacity: 0.6; }
    }
    /* Stat cards with stagger animation */
    .pg-dash__grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }

    .pg-dash__card {
        background: #fff;
        border-radius: 16px;
        padding: 1.75rem 1.5rem;
        box-shadow: 0 4px 16px rgba(0,0,0,0.08), 0 0 0 1px rgba(0,0,0,0.04);
        border: 2px solid rgba(238, 183, 45, 0.15);
        text-decoration: none;
        color: inherit;
        display: block;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
        animation: cardFadeIn 0.6s ease forwards;
    }

    /* Stagger animation for cards */
    .pg-dash__card:nth-child(1) { animation-delay: 0.1s; }
    .pg-dash__card:nth-child(2) { animation-delay: 0.2s; }
    .pg-dash__card:nth-child(3) { animation-delay: 0.3s; }
    .pg-dash__card:nth-child(4) { animation-delay: 0.4s; }
    .pg-dash__card:nth-child(5) { animation-delay: 0.5s; }
    .pg-dash__card:nth-child(6) { animation-delay: 0.6s; }
    .pg-dash__card:nth-child(7) { animation-delay: 0.7s; }
    .pg-dash__card:nth-child(8) { animation-delay: 0.8s; }

    @keyframes cardFadeIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Shimmer effect on hover */
    .pg-dash__card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(238, 183, 45, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .pg-dash__card:hover::before {
        left: 100%;
    }

    .pg-dash__card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 16px 40px rgba(0,0,0,0.12), 0 0 0 2px rgba(238, 183, 45, 0.4);
        border-color: rgba(238, 183, 45, 0.5);
        color: inherit;
        text-decoration: none;
    }

    .pg-dash__card-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .pg-dash__card:hover .pg-dash__card-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .pg-dash__card-icon.gold {
        background: linear-gradient(135deg, #EEB72D 0%, #FFE59F 50%, #EEB72D 100%);
        color: #1a1a1a;
        box-shadow: 0 6px 16px rgba(238, 183, 45, 0.4);
        animation: iconPulse 2s ease-in-out infinite;
    }

    @keyframes iconPulse {
        0%, 100% { box-shadow: 0 6px 16px rgba(238, 183, 45, 0.4); }
        50% { box-shadow: 0 8px 24px rgba(238, 183, 45, 0.6); }
    }

    .pg-dash__card-value {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1.2;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
        transition: color 0.3s ease;
    }

    .pg-dash__card:hover .pg-dash__card-value {
        color: #EEB72D;
    }

    .pg-dash__card-label {
        font-size: 0.95rem;
        color: #6c757d;
        margin-top: 0.25rem;
        font-weight: 500;
        position: relative;
        z-index: 1;
    }
    @media (max-width: 1200px) {
        .pg-dash__grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 992px) {
        .pg-dash__grid { grid-template-columns: repeat(2, 1fr); }
        .pg-dash__banner-title { font-size: 2.5rem; }
    }

    @media (max-width: 768px) {
        .pg-dash__banner { padding: 3rem 1.5rem; }
        .pg-dash__welcome-title { font-size: 3rem; }
        .pg-dash__welcome-subtitle { font-size: 1.2rem; }
        .pg-dash__card-value { font-size: 2rem; }
    }

    @media (max-width: 576px) {
        .pg-dash { padding: 0 1rem 1.5rem; }
        .pg-dash__banner { padding: 2rem 1.25rem; margin-bottom: 1.5rem; }
        .pg-dash__welcome-title { font-size: 2rem; }
        .pg-dash__welcome-subtitle { font-size: 1rem; }
        .pg-dash__grid { grid-template-columns: 1fr; gap: 1rem; }
        .pg-dash__card { padding: 1.25rem; }
        .pg-dash__card-value { font-size: 1.75rem; }
    }
</style>
@endpush

@section('content')
    <section class="content pg-dash">
        @php
            $sliderIndex = Route::has('homeslider.index') ? route('homeslider.index') : '#';
            $bannerIndex = Route::has('banner.index') ? route('banner.index') : '#';
            $testimonialIndex = Route::has('testimonial.index') ? route('testimonial.index') : '#';
            $contactUsIndex = Route::has('contactus.index') ? route('contactus.index') : '#';
            $shopContactIndex = Route::has('shopcontact.index') ? route('shopcontact.index') : '#';
            $galleryIndex = Route::has('photogallery.index') ? route('photogallery.index') : '#';
            $videoIndex = Route::has('video.index') ? route('video.index') : '#';
            $audioIndex = Route::has('audio.index') ? route('audio.index') : '#';
        @endphp

        <div class="pg-dash__banner">
            <div class="pg-dash__welcome">
                <h1 class="pg-dash__welcome-title">Welcome Admin</h1>
                <p class="pg-dash__welcome-subtitle">Manage Your Website</p>
            </div>
        </div>

        <div class="pg-dash__grid">
            <a href="{{ $sliderIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-sliders" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $slidersTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Home Sliders</div>
            </a>

            <a href="{{ $bannerIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $bannersTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Banners</div>
            </a>

            <a href="{{ $testimonialIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $testimonialsTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Testimonials</div>
            </a>

            <a href="{{ $contactUsIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $contactUsTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Contact Messages</div>
            </a>

            <a href="{{ $shopContactIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $shopContactTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Shop Contacts</div>
            </a>

            <a href="{{ $videoIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-video-camera" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $videoTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Videos</div>
            </a>

            <a href="{{ $audioIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-music" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $audioTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Audio Tracks</div>
            </a>

            <a href="{{ $galleryIndex }}" class="pg-dash__card">
                <div class="pg-dash__card-icon gold"><i class="fa fa-camera" aria-hidden="true"></i></div>
                <div class="pg-dash__card-value">{{ $galleryTotal ?? 0 }}</div>
                <div class="pg-dash__card-label">Photo Gallery</div>
            </a>
        </div>
    </section>
@endsection
