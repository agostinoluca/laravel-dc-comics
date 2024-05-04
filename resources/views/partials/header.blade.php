<header class="pb-5">
    <ul class="nav justify-content-center bg-secondary">
        <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'comics.index' ? 'bg-light text-dark fw-bold' : '' }}"
                href="{{ route('comics.index') }}">Index</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light {{ Route::currentRouteName() === 'comics.create' ? 'bg-light text-dark fw-bold' : '' }}"
                href="{{ route('comics.create') }}">Form</a>
        </li>
    </ul>
</header>
