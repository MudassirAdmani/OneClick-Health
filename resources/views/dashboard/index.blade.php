<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <!-- Master -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-md bg-gray">
        <div class="container-fluid">
            <h3 class="text-white my-auto ms-2">
                Mudassir
            </h3>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-x-lg text-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-md-row ms-auto">
                    <li class="nav-item mx-1 mt-2 mt-md-0 mb-2 mb-md-0">
                        <button class="btn-sm btn btn-success form-control form-control-sm">
                            Profile
                        </button>
                    </li>
                    <li class="mx-1 nav-item mt-lg-0 mb-2 mb-md-0">
                        <button class="btn btn-sm btn-danger form-control form-control-sm">
                            Logout
                        </button>
                    </li>
                    <li class="nav-item mx-1 mt-lg-0 mb-2 mb-md-0">
                        <button class="btn btn-sm btn-danger d-lg-none form-control form-control-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Open Menu
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-3 bg-gray d-none d-lg-block">
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
                                Add Insurance
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

            <div class="col-12 d-lg-none">
                <div style="width: 250px;" class="offcanvas p-3 bg-gray offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
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
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>