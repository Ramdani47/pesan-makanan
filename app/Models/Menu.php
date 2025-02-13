<?php

namespace App\Models;
use app\Http\Controllers\MenuController;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function index()
{
    return view('menus.index', compact('menus'));
}
}
