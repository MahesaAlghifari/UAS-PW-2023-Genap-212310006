@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Edit Review</h2>
        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" value="{{ $review->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $review->email }}" required>
            </div>
            <div class="form-group">
                <label for="review">Review:</label>
                <input type="number" name="review" class="form-control" value="{{ $review->review }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
