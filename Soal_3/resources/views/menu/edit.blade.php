@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Edit Menu</h2>
        <form enctype="multipart/form-data" action="{{ route('menu.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Menu:</label>
                <input type="text" name="name" class="form-control" value="{{ $menu->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Harga:</label>
                <input type="number" name="price" class="form-control" value="{{ $menu->price }}" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi:</label>
                <textarea name="description" class="form-control" required>{{ $menu->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Kategori:</label>
                <label class="me-5 ">
                    <input type="radio" class="is_active_Y" name="category" value="makanan" {{ $menu->category == 'makanan' ? 'checked' : '' }} /> Makanan
                </label>
                <label class="me-5">
                    <input type="radio" class="is_active_N" name="category" value="minuman" {{ $menu->category == 'minuman' ? 'checked' : '' }} /> Minuman
                </label>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                @if ($menu->images)
                    <img src="{{ asset('images/menu/' . $menu->images) }}" alt="Gambar Sebelumnya" style="max-width: 200px;">
                @else
                    <p>Tidak ada gambar sebelumnya</p>
                @endif
                <input type="file" name="image" class="form-control" value="{{ $menu->images }}">
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
