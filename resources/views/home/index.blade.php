<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <!-- Master -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Navbar -->
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link me-2" href="room.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-danger me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Login -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 400px;">
            <div class="modal-content loginModal">
                <form method="post" action="backend/register.php">
                    <div class="p-3 d-flex justify-content-between">
                        <div></div>
                        <div class="bg-white p-1 d-flex justify-content-center align-items-center rounded-circle" style="height: 100px; width: 100px;">
                            <img src="images/logo/logo1.png" alt="" class="img-fluid">
                        </div>
                        <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label text-white">Email address</label>
                            <input type="email" name="logEmail" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Password</label>
                            <input type="password" name="logPass" class="form-control shadow-none" required>
                        </div>
                        <button type="submit" name="logBtn" class="btn btn-danger form-control">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Register -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 400px;">
            <div class="modal-content registerModal">
                <form>
                    <div class="p-3 d-flex justify-content-between">
                        <div></div>
                        <div class="bg-white p-1 d-flex justify-content-center align-items-center rounded-circle" style="height: 100px; width: 100px;">
                            <img src="images/logo/logo1.png" alt="" class="img-fluid">
                        </div>
                        <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="mb-3">
                                <label class="form-label text-white">Name</label>
                                <input type="text" class="form-control bg-light shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Email</label>
                                <input type="email" class="form-control bg-light shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Phone</label>
                                <input type="number" class="form-control bg-light shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Address</label>
                                <textarea rows="1" class="form-control bg-light shadow-none"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Password</label>
                                <input type="password" class="form-control bg-light shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Confirm Password</label>
                                <input type="password" class="form-control bg-light shadow-none">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Register" class="btn btn-danger form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mainSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/carousel1.png" class="w-100 d-block img-fluid banner" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/carousel2.png" class="w-100 d-block img-fluid banner" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/carousel3.png" class="w-100 d-block img-fluid banner" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/carousel4.png" class="w-100 d-block img-fluid banner" />
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS -->
    <!-- Carousel -->
    <script src="./js/carousel.js"></script>
</body>

</html>