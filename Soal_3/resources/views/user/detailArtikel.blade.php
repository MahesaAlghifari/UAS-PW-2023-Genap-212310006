@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Home</a>
        <div style="margin-top: 60px">
            <div class="card mb-3">
                <img src="{{ asset('images/content/' . $article->images) }}" class="card-img-top" alt="Article Image" style="height: 600px; width: 100%; object-fit: cover;">

                <div class="card-body">
                    <h2 class="judul">{{ $article->judul }}</h2>
                    <p class="card-text"><small class="text-muted">Tanggal Upload: {{ $article->tanggal_upload }}</small>
                    </p>
                    <p class="card-text">{{ $article->isi }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
