<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">

        <a class="navbar-brand" href="{{ route('page.homepage') }}">
            <x-logo />
        </a>

        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('announcement.index') }}">Annunci</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-center" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Categorie</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li><a href="{{ route('categoryShow', compact('category')) }}"
                                        class="dropdown-item">{{ $category->name }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('announcement.create') }}">Inserisci annuncio</a>
                        </li>
                        <li class="nav-item"><b class="nav-link text-warning">Benvenuto {{ Auth::user()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </b></li>
                        <li class="btn-user">
                            <a class="nav-link active" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                        <li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-warning" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>

    </div>
</nav>
