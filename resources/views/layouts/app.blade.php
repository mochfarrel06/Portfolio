<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Website')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Icon Iconoir --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="container mt-4">
        {{-- Content --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    {{-- @include('partials.footer') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const showMenu = (toggleId, navId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId)

            toggle.addEventListener('click', () => {
                // Add show menu class to nav menu
                nav.classList.toggle('show-menu')
                // Add show icon to show and hide menu icon
                toggle.classList.toggle('show-icon')
            })
        }

        showMenu('nav-toggle', 'nav-menu')
    </script>

</body>

</html>
