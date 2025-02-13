<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
{
    $menus = Menu::all();
    return view('menus.index', compact('menus'));
}

public function create()
{
    return view('menus.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    Menu::create($request->all());
    return redirect()->route('menus.index');
}

public function edit(Menu $menu)
{
    return view('menus.edit', compact('menu'));
}

public function update(Request $request, Menu $menu)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    $menu->update($request->all());
    return redirect()->route('menus.index');
}

public function destroy(Menu $menu)
{
    $menu->delete();
    return redirect()->route('menus.index');
}

}
