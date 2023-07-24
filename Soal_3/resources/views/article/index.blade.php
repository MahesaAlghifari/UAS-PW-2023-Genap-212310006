@extends('layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 60px">
        <h2>Article List</h2>
        <a href="{{ route('article.create') }}" class="btn btn-primary mb-3">Add Article</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Upload Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->publish }}</td>
                        <td><img style="width: 225px" src="images/articles/{{ $article->images }}" alt=""></td>
                        <td>
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
