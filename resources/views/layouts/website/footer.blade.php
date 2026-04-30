@php
    $primaryEmail = 'lyllivb.Libero07@gmail.com';
    $fieldLevelUrl = 'https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen';
    $instagramUrl = 'https://instagram.com/chylli.lilly07';
    $footerNav = [
        ['href' => '#about', 'label' => 'About'],
        ['href' => '#stats', 'label' => 'Stats'],
        ['href' => '#awards', 'label' => 'Awards'],
        ['href' => '#videos', 'label' => 'Videos'],
        ['href' => '#academics', 'label' => 'Academics'],
        ['href' => '#contact', 'label' => 'Contact'],
    ];
@endphp

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__brand">
                <a href="{{ url('/') }}" class="footer__brand-mark" aria-label="Lyllianna Aguayo home">
                    @if (!empty($home_page_data['header_logo']))
                        <img class="footer__logo-custom"
                            src="{{ asset('admin/assets/images/page/' . $home_page_data['header_logo']) }}"
                            alt="Lyllianna Aguayo">
                    @else
                        <span class="footer__logo-mark">LA</span>
                    @endif
                </a>
                <div>
                    <p class="footer__name">Lyllianna Aguayo</p>
                    <p class="footer__tagline-sm">Libero / DS · Rio Hondo College</p>
                </div>
            </div>

            <nav class="footer__links" aria-label="Footer navigation">
                @foreach ($footerNav as $item)
                    <a href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                @endforeach
            </nav>

            <div class="footer__social">
                <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="{{ $fieldLevelUrl }}" target="_blank" rel="noopener noreferrer" aria-label="FieldLevel profile">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </a>
                <a href="mailto:{{ $primaryEmail }}" aria-label="Email">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,12 2,6"></polyline>
                    </svg>
                </a>
            </div>
        </div>

        <div class="footer__bar">
            <p class="footer__bar-text">&copy; {{ date('Y') }} Lyllianna Aguayo. All rights reserved.</p>
        </div>
    </div>
</footer>
