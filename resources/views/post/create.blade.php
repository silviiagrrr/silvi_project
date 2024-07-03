@extends('layout.aplikasi')

@section('title', 'Buat Pesanan Baru')

@section('content')
<div class="text-center container-fluid justify-content-center">
    <a href="#"><img src="{{ asset('asset/img/logod.png') }}" alt="Logo" width="250" height="250" class="navbar-logo"></a>
</div>
<div class="wrapper">
    <h1 class="text-center mb-4">Buat Pesanan Baru</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('posts') }}">
        @csrf

        <div class="form-group">
            <label for="title">Nama</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="Tuliskan Nama Anda" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="body">Pesanan & Keterangan</label>
            <textarea id="body" name="body" class="form-control" placeholder="Tuliskan Pesanan Anda">{{ old('body') }}</textarea>
        </div>
<br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="mt-3">
        <!-- Tombol untuk lihat pesanan di posts -->
        <a href="{{ url('posts') }}" class="btn btn-secondary">Lihat Pesanan</a>
    </div>
</div>
@endsection
