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
            <div class="container">
                <!-- partial -->
                @if (session()->has('Message'))
                <div class="col-8 mx-auto">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session()->get('Message') }}
                    </div>
                </div>
                @endif
                <div class="col-8 mx-auto mt-3">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-white">ID</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Email</th>
                                <th class="text-white">Usertype</th>
                                <th class="text-white">Phone</th>
                                <th class="text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)
                            <tr>
                                <td class="text-white">{{ $user->id }}</td>
                                <td class="text-white">{{ $user->name }}</td>
                                <td class="text-white">{{ $user->email }}</td>
                                <td class="text-white">
                                    @if($user->usertype == 1)
                                    Admin
                                    @else
                                    User
                                    @endif
                                </td>
                                <td class="text-white">{{ $user->phone }}</td>
                                <td class="text-white">
                                    <a href="{{ url('/edituser', $user->id) }}" class="btn-sm btn btn-success">Edit</a>
                                    <a href="{{ url('/deleteuser', $user->id) }}" class="btn-sm btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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