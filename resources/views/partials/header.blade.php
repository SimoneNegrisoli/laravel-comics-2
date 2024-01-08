@php
    $headerdb = config('db.menu');
@endphp

<header>
    <div class="container">
        <div class="row align-items-center p-4">
            <div class="col-12 col-md-4">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo" />
            </div>
            <ul class="nav nav-underline col-12 col-md-8">
                @foreach ($headerdb as $el)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $el['url'] }}">
                            {{ $el['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="jumbo"></div>
</header>
