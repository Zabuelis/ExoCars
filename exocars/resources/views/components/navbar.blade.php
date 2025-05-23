<header>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"> ExoCars </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/listings">Listings</a>
                    @auth
                    <a class="nav-link" href="/profile">Profile </a>
                    @if(auth()->user()->isAdmin())
                    <a class="nav-link" href="/admin">Admin Panel </a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link">Logout</button>
                    </form>
                    @else
                    <a class="nav-link" href="/login">Log In </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>