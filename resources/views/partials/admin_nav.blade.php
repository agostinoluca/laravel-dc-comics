    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'bg-info text-light fw-bold rounded-5' : '' }}"
                href="{{ route('comics.index') }}">Database</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'bg-info text-light fw-bold rounded-5' : '' }}"
                href="{{ route('comics.create') }}">Add Comic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ route('home') }}">Exit</a>
        </li>
    </ul>
