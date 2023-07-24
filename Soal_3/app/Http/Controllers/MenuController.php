<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{

    public function index()
    {
        $menus = Menu::all();

        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->name) . ".jpg";
            $file->move(public_path('images/menus'), $newFilename);
            $request->merge(['image' => $newFilename]);
        }

        Menu::create($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->name) . ".jpg";
            $file->move(public_path('images/menus'), $newFilename);
            $request->merge(['image' => $newFilename]);
        }

        $menu->update($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')
            ->with('success', 'Menu deleted successfully.');
    }
}
