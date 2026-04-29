<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="@yield('meta_description', 'Official recruitment portfolio of Lyllianna Aguayo — Libero/DS, Rio Hondo College. Class of 2027, GPA 3.20. First Team All-League, Second Team All-Conference.')">
    <title>@yield('title', 'Lyllianna Aguayo — Volleyball Recruitment Portfolio')</title>
    @php
        $fav = $home_page_data['header_favicon'] ?? '';
    @endphp
    @if (!empty($fav))
        <link rel="icon" href="{{ asset('public/admin/assets/images/page/' . $fav) }}" type="image/png" sizes="32x32">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/website/css/portfolio.css') }}">
    @stack('styles')
</head>

<body>
    @include('layouts.website.header')

    <main id="main">
        @yield('content')
    </main>

    @include('layouts.website.footer')

    <script src="{{ asset('public/assets/website/js/portfolio.js') }}" defer></script>
    @stack('js')
</body>

</html>
