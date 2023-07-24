@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top: 60px">
    <h2>Edit Article</h2>
    <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
        </div>

        <div class="form-group">
            <label for="content">Isi:</label>
            <textarea name="content" class="form-control" required>{{ $article->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="publish">Tanggal Upload:</label>
            <input type="date" name="publish" class="form-control" value="{{ $article->publish }}" required>
        </div>

        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" name="image" class="form-control" value="{{ $article->image}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
