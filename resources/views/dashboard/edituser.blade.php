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
                <div class="col-12">
                    <h2 class="text-center">Add User</h2>
                </div>
                <!-- partial -->
                @if (session()->has('Message'))
                <div class="col-8 mx-auto">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session()->get('Message') }}
                    </div>
                </div>
                @endif
                <form method="POST" class="text-dark" enctype="multipart/form-data" action="{{ url('updateuser', $data->id) }}">
                    @csrf
                    <div class="form-group col-6 mx-auto p-3">
                        <label class="form-label text-white">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="User Name" required>
                    </div>
                    <div class="form-group col-6 mx-auto p-3">
                        <label class="form-label text-white">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $data->email }}" placeholder="User Email" required>
                    </div>
                    <div class="form-group col-6 mx-auto p-3">
                        <label class="form-label text-white">Usertype</label>
                        <input type="text" class="form-control" name="usertype" value="{{ $data->usertype }}" placeholder="User Type" required>
                    </div>
                    <div class="form-group col-6 mx-auto p-3">
                        <label class="form-label text-white">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $data->phone }}" placeholder="User Phone" required>
                    </div>
                    <div class="form-group col-8 mx-auto p-3">
                        <label class="form-label text-white">Old Image</label><br>
                        <img src="/userimages/{{ $data->image }}" width="100" height="100" style="object-fit: cover">
                    </div>
                    <div class="form-group col-8 mx-auto p-3">
                        <label class="form-label text-white">New Image</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="col-6 mx-auto p-3">
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </div>
                </form>
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