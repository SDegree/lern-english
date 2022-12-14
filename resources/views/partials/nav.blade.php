<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Learning English</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') || Request::is('ind') ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('choose') || Request::is('task*') ? 'active' : '' }}"
                        href="/choose">Task</a>
                </li>
                @can('isAdmin')
                    <li class="nav-item">
                        <a href="/create" class="nav-link {{ Request::is('create') ? 'active' : '' }}">Add Vocabulary</a>
                    </li>
                @endcan
            </ul>
        </div>
        <div class="text-end">
            @auth
                <a href="/" class="text-decoration-none text-light">{{ auth()->user()->name }}</a>
                <p class="text-light d-inline mx-1">|</p>
                <a href="/logout" class="text-decoration-none me-2 text-light">Logout</a>
            @else
                <a href="/signIn" class="text-decoration-none me-2 text-light">Sign In</a>
                <a href="/signUp" class="text-decoration-none me-2 text-light">Sign Up</a>
            @endauth
        </div>
    </div>
</nav>
