<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content loginModal">
            <form method="post" action="backend/register.php">
                <div class="modal-header">
                    <h5 class="modal-title d-flex text-white align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login
                    </h5>
                    <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-white">Email address</label>
                        <input type="email" placeholder="Enter Email" name="logEmail" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" placeholder="Enter Password" name="logPass" class="form-control shadow-none" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="logBtn" class="py-1 px-3 border-0 rounded-1 btn-orange text-white">Login</button>
                        <a href="javascript: void(0)" class="text-white text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>