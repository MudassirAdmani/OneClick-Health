<nav class="navbar navbar-expand-md bg-gray">
    <div class="container-fluid">
        <div class="bg-white p-1 ms-5 d-flex justify-content-center align-items-center rounded-circle" style="height: 80px; width: 80px;">
            <img src="images/logo/logo2.png" alt="" class="img-fluid">
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-md-row ms-auto">
                <li class="nav-item mx-1 mt-2 mt-md-0 mb-2 mb-md-0">
                    <a class="btn btn-success form-control form-control-sm" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-1 mt-lg-0 mb-2 mb-md-0">
                    <a class="btn btn-primary form-control form-control-sm" href="{{ route('profile.show') }}">
                        Profile
                    </a>
                </li>
                <li class="mx-1 nav-item mt-lg-0 mb-2 mb-md-0">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger form-control form-control-sm">Logout</button>
                    </form>
                </li>
                <li class="nav-item mx-1 mt-lg-0 mb-2 mb-md-0">
                    <button class="btn  btn-danger d-lg-none form-control form-control-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        Open Menu
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>