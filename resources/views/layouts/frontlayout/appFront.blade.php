<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Test task full-stack position.') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/front/main.js') }}" defer></script>
    <link href="{{ asset('css/front/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/front/icomoon/style.css') }}" rel="stylesheet">
    <!-- Fonts -->
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('css/front/logos/NavLogo.png') }}" alt="navlogo failed">
    </div>
    <div class="contacts">
        <p class="small_tex_regular">Need Help?</p>
        <p>(514) 543-9936</p>
    </div>
    <div class="nav">
        <ul class="topmenu">
            <li><a href="#" class="{{ Request::path() == '/' ? 'active' : ''  }}">Home</a>
            <li><a href="#" class="{{ Request::has('servises') ? 'active' : ''  }}">Services <span class="menu-icon icon-ArrowDown"></span></a>
                <ul class="submenu">
                    <li><a href="#">Sub-Menu 1</a>
                    </li>
                    <li><a href="#">Sub-Menu 2 <span class="menu-icon icon-ArrowRight"></span></a>
                        <ul class="submenu subsubmenu">
                            <li><a href="#">Turpis consectetur 3</a></li>
                            <li><a href="#">Senectus cursus pretium malesuada.</a></li>
                            <li><a href="">Luctus neque frin 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Turpis consectetur 3</a></li>
                    <li><a href="#">Luctus neque frin 4</a></li>
                </ul>
            </li>
            <li><a href="#" class="{{ Request::has('about') ? 'active' : ''  }}">About <span class="menu-icon icon-ArrowDown"></span></a></li>
            <li><a href="#" class="{{ Request::has('book') ? 'active' : ''  }}">Book now</a></li>
            <li><a href="#" class="{{ Request::has('shop') ? 'active' : ''  }}">Shop <span class="menu-icon icon-ArrowDown"></span></a></li>
            <li><a href="#" class="{{ Request::path() === 'blog' ? 'active' : ''  }}">Blog</a></li>
            <li><a href="#" class="{{ Request::has('contact') ? 'active' : ''  }}">Contact</a></li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>
