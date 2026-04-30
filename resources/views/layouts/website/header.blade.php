@php
    $primaryEmail = 'lyllivb.Libero07@gmail.com';
    $navSections = [
        ['href' => url('/'), 'label' => 'Home'],
        ['href' => '#about', 'label' => 'About'],
        ['href' => '#stats', 'label' => 'Stats'],
        ['href' => '#awards', 'label' => 'Awards'],
        ['href' => '#videos', 'label' => 'Videos'],
        ['href' => '#academics', 'label' => 'Academics'],
        ['href' => '#contact', 'label' => 'Contact'],
    ];
@endphp

<a href="#main" class="skip-link">Skip to main content</a>

<header class="nav" id="nav" role="banner">
    <div class="nav__inner">
        <a href="{{ url('/') }}" class="nav__logo" aria-label="Lyllianna Aguayo home">
            @if (!empty($home_page_data['header_logo']))
                <img class="nav__logo-img"
                    src="{{ asset('admin/assets/images/page/' . $home_page_data['header_logo']) }}"
                    alt="Lyllianna Aguayo">
            @else
                <span class="nav__logo-mark">LA</span>
                <span class="nav__logo-text">Lyllianna Aguayo</span>
            @endif
        </a>

        <nav class="nav__links" role="navigation" aria-label="Primary navigation">
            @foreach ($navSections as $item)
                <a href="{{ $item['href'] }}" class="nav__link">{{ $item['label'] }}</a>
            @endforeach
            @auth
                <a href="{{ route('dashboard') }}" class="nav__link">Dashboard</a>
                <a href="{{ route('logout') }}" class="nav__link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            @endauth
        </nav>

        <a href="mailto:{{ $primaryEmail }}" class="btn btn--primary nav__cta">Contact Me</a>

        <button type="button" class="nav__hamburger" aria-label="Toggle mobile menu" aria-expanded="false"
            aria-controls="mobile-menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" aria-hidden="true">
    <div class="mobile-menu__inner">
        <nav class="mobile-menu__links" role="navigation">
            @foreach ($navSections as $item)
                <a href="{{ $item['href'] }}" class="mobile-menu__link">{{ $item['label'] }}</a>
            @endforeach
            @auth
                <a href="{{ route('dashboard') }}" class="mobile-menu__link">Dashboard</a>
                <a href="{{ route('logout') }}" class="mobile-menu__link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            @endauth
        </nav>
        <a href="mailto:{{ $primaryEmail }}" class="btn btn--primary mobile-menu__cta">Contact Me</a>
    </div>
</div>

@auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
        @csrf
    </form>
@endauth
