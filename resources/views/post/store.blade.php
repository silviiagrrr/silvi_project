@extends('layout.aplikasi')

@section('title', 'Post Berhasil Disimpan')

@section('content')
    <div class="wrapper">
        <h1>Post Berhasil Disimpan</h1>

        <div class="alert alert-success">
            <p>Post baru berhasil disimpan.</p>
        </div>

        <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali ke Daftar Post</a>
    </div>
@endsection
