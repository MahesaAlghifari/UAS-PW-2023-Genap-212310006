@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Daftar Review</h2>
        <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Tambah Review</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Review</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $review->name }}</td>
                        <td>{{ $review->email }}</td>
                        <td>{{ $review->review }}</td>
                        <td>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus review ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
