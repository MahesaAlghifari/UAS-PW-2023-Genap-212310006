@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Artikel</h2>
        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Upload</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->judul }}</td>
                        <td>{{ $article->isi }}</td>
                        <td>{{ $article->tanggal_upload }}</td>
                        <td><img src="{{ asset('images/content/' . $article->images) }}" alt="Gambar Artikel"
                                width="100"></td>
                        <td>
                            <a href="{{ route('article.edit', $article->id) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.filter-button').click(function() {
                var category = $(this).data('category');

                if (category === 'all') {
                    $('.filter-item').show();
                } else {
                    $('.filter-item').hide();
                    $('.filter-item[data-category="' + category + '"]').show();
                }
            });
        });
    </script>
@endsection
