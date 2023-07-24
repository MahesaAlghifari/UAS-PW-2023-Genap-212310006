<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Review;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $menus = Menu::all();
    //     $articles = Article::all();
    //     return view('user.home', [
    //         'menus' => $menus,
    //         'articles' => $articles

    //     ]);
    // }

    public function index()
    {
        $menus = Menu::all();
        $articles = Article::all();
        $reviews = Review::all();
    
    
        return view('user.home', [
            'menus' => $menus,
            'articles' => $articles,
            'reviews' => $reviews
        ]);
    }
}
    