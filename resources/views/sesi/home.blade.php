@extends('layout.aplikasi')

@section('container')
<div class="text-center container-fluid justify-content-center">
    <a href="#"><img src="{{ asset('asset/img/logod.png') }}" alt="Logo" width="250" height="250" class="navbar-logo"></a>
</div>
<hr>
<div class="container">
    <div class="text-center mb-4">
        <h1>Best Seller Cakes</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('asset/img/2.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <div class="card-body">
                    <h5 class="card-title">Ugly Cake</h5>
                    <p class="card-text">Kue Lucu dan menarik perhatian.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Buy</a>
                        </div>
                        <small class="text-muted">9 mins ago</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('asset/img/4.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <div class="card-body">
                    <h5 class="card-title">Chocolate Cake</h5>
                    <p class="card-text">Creamy cheesecake topped with fresh strawberries.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Buy</a>
                        </div>
                        <small class="text-muted">1 hour ago</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('asset/img/5.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <div class="card-body">
                    <h5 class="card-title">Lemon Cheesecake</h5>
                    <p class="card-text">Classic red velvet cake with cream cheese frosting.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Buy</a>
                        </div>
                        <small class="text-muted">3 hours ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasDarkLabel">Account</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

      <a href="/sesi" class="btn btn-secondary d-block">Login</a>
      <br>
      <a href="{{ route('sesi.register') }}" class="btn btn-secondary d-block">Register</a>
  </div>
</div>


<div class="text-center mt-4">
    <!-- Button to toggle the offcanvas -->
    <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">See More Cakes and Order</a>
</div>

</div>
@endsection
