@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Detail Review</h2>
        <table class="table">
            <tr>
                <th>Nama</th>
                <td>{{ $review->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $review->email }}</td>
            </tr>
            <tr>
                <th>Review</th>
                <td>{{ $review->review }}</td>
            </tr>
        </table>
        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
