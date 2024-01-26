<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <img class="img-fluid" src="images/logo/logo.png" alt="hotelbookinghub-logo">
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="room.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact</a>
                </li>
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="btn btn-secondary me-2" href="/dash">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
            @else
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-danger me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
            @endauth
            @endif
        </div>
    </div>
</nav>