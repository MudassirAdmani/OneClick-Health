<div class="container">
    <h2 class="text-center my-4">Insurance Plans</h2>
    @if (session()->has('alert'))
    <div class="col-8 mx-auto">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session()->get('alert') }}
        </div>
    </div>
    @elseif (session()->has('success'))
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
                <a href="{{ url('/addinsurance', ['plan' => 'Basic', 'price' => 10]) }}" class="btn btn-danger form-control">Get Started</a>
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
                <a href="{{ url('/addinsurance', ['plan' => 'Pro', 'price' => 20]) }}" class="btn btn-danger form-control">Get Started</a>
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
                <a href="{{ url('/addinsurance', ['plan' => 'Premium', 'price' => 30]) }}" class="btn btn-danger form-control">Get Started</a>
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