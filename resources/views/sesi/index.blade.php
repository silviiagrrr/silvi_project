@extends('layout.aplikasi')

@section('konten')
<div class="text-center container-fluid justify-content-center">
    <a href="#"><img src="{{ asset('asset/img/logod.png') }}" alt="Logo" width="250" height="250" class="navbar-logo"></a>
</div>
<br>
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1 class="text-center">LOGIN</h1>
    <form action="{{ route('sesi.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
        </div>
    </form>
</div>
@endsection
