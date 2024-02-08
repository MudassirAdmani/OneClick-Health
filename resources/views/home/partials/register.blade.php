<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content bg-gray">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
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
                            <label for="name" value="{{ __('Name') }}" class="form-label text-white">Name</label>
                            <input type="text" id="name" name="name" :value="old('name')" class="form-control bg-light shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="email" value="{{ __('Email') }}" class="form-label text-white">Email</label>
                            <input id="email" type="email" name="email" :value="old('email')" class="form-control bg-light shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="phone" value="{{ __('phone') }}" class="form-label text-white">Phone</label>
                            <input id="phone" name="phone" :value="old('phone')" type="number" class="form-control bg-light shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="password" value="{{ __('Password') }}" class="form-label text-white">Password</label>
                            <input id="password" name="password" type="password" class="form-control bg-light shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}" class="form-label text-white">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" type="password" class="form-control bg-light shadow-none">
                        </div>
                        <button type="submit" class="btn btn-danger form-control">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>