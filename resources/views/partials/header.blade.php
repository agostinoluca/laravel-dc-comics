<header class="bg-secondary position-relative">
    <nav class="nav justify-content-center">
        <ul class="nav bg-secondary">
            <li class="nav-item">
                <a class="nav-link text-light {{ Route::currentRouteName() === 'home' ? 'bg-light text-dark fw-bold' : '' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light {{ Route::currentRouteName() === 'about' ? 'bg-light text-dark fw-bold' : '' }}"
                    href="{{ route('about') }}">About</a>
            </li>
        </ul>
    </nav>
    <div class="position-absolute top-0 end-0 p-2">
        <a class="nav-link text-dark {{ Route::currentRouteName() === 'admin' ? 'bg-light text-dark fw-bold' : '' }}"
            href="{{ route('comics.index') }}">Admin section</a>
    </div>

</header>
