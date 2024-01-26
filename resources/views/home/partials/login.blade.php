<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content bg-gray">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="p-3 d-flex justify-content-between">
                    <div></div>
                    <div class="bg-white p-1 d-flex justify-content-center align-items-center rounded-circle" style="height: 100px; width: 100px;">
                        <img src="images/logo/logo1.png" alt="" class="img-fluid">
                    </div>
                    <button type="reset" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" value="{{ __('Email') }}" class="form-label text-white">Email address</label>
                        <input id="email" type="email" name="email" :value="old('email')" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" value="{{ __('Password') }}" class="form-label text-white">Password</label>
                        <input id="password" type="password" name="password" class="form-control shadow-none" required>
                    </div>
                    <button type="submit" class="btn btn-danger form-control">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>