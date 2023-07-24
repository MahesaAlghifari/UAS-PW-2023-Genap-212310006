<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'publish' => 'required',
            'image' => 'required', // Menambahkan validasi image
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->title) . ".jpg";
            $file->move(public_path('image/articles'), $newFilename);
            $request->merge(['images' => $newFilename]);
        }

        Article::create($request->all());

        return redirect()->route('article.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'publish' => 'required',
            'image' => 'required', // Menambahkan validasi image
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->title) . ".jpg";
            $file->move(public_path('images/articles'), $newFilename);
            $request->merge(['images' => $newFilename]);
        }

        $article->update($request->all());

        return redirect()->route('article.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')
            ->with('success', 'Article deleted successfully.');
    }
}
