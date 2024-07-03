@extends('layout.aplikasi')

@section('title', 'Semua Pesanan')

@section('content')
<div class="text-center container-fluid justify-content-center">
    <a href="#"><img src="{{ asset('asset/img/logod.png') }}" alt="Logo" width="250" height="250" class="navbar-logo"></a>
</div>
<div class="wrapper">
    <h1 style="text-align: center;">Semua Pesanan</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pesanan</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td style="width: 200px">{{ $post->title }}</td>
                <td style="width: 500px">{{ $post->body }}</td>
                <td style="width: 100px">
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-green">Edit</a>
                </td>
                <td style="width: 100px">
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-red" onclick="return confirm('Apakah Anda yakin ingin menghapus post ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
