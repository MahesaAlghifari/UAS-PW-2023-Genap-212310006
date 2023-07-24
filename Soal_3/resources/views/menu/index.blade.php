@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">

        <h2>Menu List</h2>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">Add Menu</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->category }}</td>
                        <td><img style="width: 225px" src="images/menus/{{ $menu->images }}" alt=""></td>
                        <td>
                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </form>

                        </td>
      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
