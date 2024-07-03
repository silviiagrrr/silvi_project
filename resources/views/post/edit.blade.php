@extends('layout.aplikasi')

@section('title', 'Edit Post')

@section('content')
<div class="wrapper">
    <h1>Edit Post</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form untuk mengedit post -->
    <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT') <!-- Method PUT untuk update -->

        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control">{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <br>

    <!-- Button untuk kembali ke halaman index -->
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Lihat Pesanan</a>
</div>
@endsection
