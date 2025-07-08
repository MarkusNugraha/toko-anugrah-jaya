<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    </head>
    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}

        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <a href="{{ url('profile') }}" class="header__img">
                    <img src="{{ asset('image/perfil.jpg') }}" alt="" class="header__img">
                </a>

                <a href="{{ url('dashboard') }}" class="header__logo">Anugrah Jaya</a>

                {{-- <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div> --}}

                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon'></i>
                        <span class="nav__logo-name">Anugrah Jaya</span>
                    </a>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>

                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon'></i>
                                <span class="nav__name">Home</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon'></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Passwords</a>
                                        <a href="#" class="nav__dropdown-item">Mail</a>
                                        <a href="#" class="nav__dropdown-item">Accounts</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon'></i>
                                <span class="nav__name">Messages</span>
                            </a>
                        </div>

                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon'></i>
                                    <span class="nav__name">Notifications</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Blocked</a>
                                        <a href="#" class="nav__dropdown-item">Silenced</a>
                                        <a href="#" class="nav__dropdown-item">Publish</a>
                                        <a href="#" class="nav__dropdown-item">Program</a>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-compass nav__icon'></i>
                                <span class="nav__name">Explore</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon'></i>
                                <span class="nav__name">Saved</span>
                            </a>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" class="nav__link nav__logout"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class='bx bx-log-out nav__icon'></i>
                        <span class="nav__name">Log Out</span>
                    </a>
                </form>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
