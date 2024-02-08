<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="dashboard/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="dashboard/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="dashboard/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="dashboard/assets/images/favicon.png" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('dashboard.partials.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('dashboard.partials.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container mt-3">
                <h2 class="text-center my-4">Membership Plans</h2>
                @if (session()->has('success'))
                <div class="col-8 mx-auto">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session()->get('success') }}
                    </div>
                </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="border shadow-sm rounded p-4">
                            <h5>Basic</h5>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <h3><span class="fw-bold">10$</span><span class="h6 fw-bold">/month</span></h3>
                            <a href="{{ url('/addmembership', ['plan' => 'Basic', 'price' => 10]) }}" class="btn btn-danger bg-danger form-control">Get Started</a>
                            <hr>
                            <h5>What's Included</h5>
                            <p><i class="bi bi-check-lg text-success"></i>Service 1</p>
                            <p><i class="bi bi-check-lg text-success"></i>Service 2</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 3</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 4</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border shadow-sm rounded p-4">
                            <h5>Pro</h5>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <h3><span class="fw-bold">20$</span><span class="h6 fw-bold">/month</span></h3>
                            <a href="{{ url('/addmembership', ['plan' => 'Pro', 'price' => 20]) }}" class="btn btn-danger bg-danger form-control">Get Started</a>
                            <hr>
                            <h5>What's Included</h5>
                            <p><i class="bi bi-check-lg text-success"></i>Service 1</p>
                            <p><i class="bi bi-check-lg text-success"></i>Service 2</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 3</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 4</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border shadow-sm rounded p-4">
                            <h5>Premium</h5>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <h3><span class="fw-bold">30$</span><span class="h6 fw-bold">/month</span></h3>
                            <a href="{{ url('/addmembership', ['plan' => 'Premium', 'price' => 30]) }}" class="btn btn-danger bg-danger form-control">Get Started</a>
                            <hr>
                            <h5>What's Included</h5>
                            <p><i class="bi bi-check-lg text-success"></i>Service 1</p>
                            <p><i class="bi bi-check-lg text-success"></i>Service 2</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 3</p>
                            <p><i class="bi bi-x-lg text-danger"></i>Service 4</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="dashboard/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="dashboard/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="dashboard/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="dashboard/assets/js/off-canvas.js"></script>
    <script src="dashboard/assets/js/hoverable-collapse.js"></script>
    <script src="dashboard/assets/js/misc.js"></script>
    <script src="dashboard/assets/js/settings.js"></script>
    <script src="dashboard/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="dashboard/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>