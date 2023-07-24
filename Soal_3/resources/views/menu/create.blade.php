@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Add Menu</h2>
        <form enctype="multipart/form-data" action="{{ route('menu.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Menu:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <label class="me-5">
                    <input type="radio" class="is_active_Y" name="category" value="makanan" /> Makanan
                </label>
                <label class="me-5">
                    <input type="radio" class="is_active_N" name="category" value="minuman" /> Minuman
                </label>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
