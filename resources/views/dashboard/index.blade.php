<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <!-- Master -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 bg-gray d-none d-md-block">
                <div class="bg-white p-1 mx-auto d-flex justify-content-center align-items-center rounded-circle" style="height: 80px; width: 80px;">
                    <img src="images/logo/logo2.png" alt="" class="img-fluid">
                </div>
                <div class="position-sticky">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                Add Doctors
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Doctors
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                Add Users
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Users
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                Add Products
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Products
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Insurance
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Appointments
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="form-control btn btn-danger" href="#">
                                View Revenue
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 d-md-none">
                <div class="offcanvas p-3 bg-gray offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <div class="bg-white p-1 d-flex justify-content-center align-items-center rounded-circle" style="height: 80px; width: 80px;">
                            <img src="images/logo/logo2.png" alt="" class="img-fluid">
                        </div>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-column">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        Add Doctors
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Doctors
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        Add Users
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Users
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        Add Products
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Products
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Insurance
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Appointments
                                    </a>
                                </li>
                                <li class="nav-item mt-4">
                                    <a class="form-control btn btn-danger" href="#">
                                        View Revenue
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <nav class="navbar navbar-expand-lg bg-gray">
                    <div class="container-fluid">
                        <span class="text-white me-auto">
                            OneClick Health
                        </span>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <button>
                                        Profile
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button>
                                        Logout
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="btn btn-danger d-md-none form-control" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        Open Menu
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>