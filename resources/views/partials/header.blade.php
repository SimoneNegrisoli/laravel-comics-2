@php
    $headerdb = config('db.menu');
@endphp

<header>
    <div class="container">
        <div class="row align-items-center p-4">
            <div class="col-12 col-md-4">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo" />
                </a>

            </div>

            <ul class="nav nav-underline col-12 col-md-8">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">
                        Comics
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Character
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Movie
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Tv
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Games
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Collectibles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Videos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Fans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Shop
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="jumbo"></div>
</header>
