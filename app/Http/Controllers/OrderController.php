<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
{
    $menu = Menu::find($request->menu_id);
    $totalPrice = $menu->price * $request->quantity;

    Order::create([
        'customer_id' => $request->customer_id,
        'menu_id' => $request->menu_id,
        'quantity' => $request->quantity,
        'total_price' => $totalPrice,
    ]);

    return redirect()->route('orders.index');
}
}
$totalPrice = Menu::find($request->menu_id)->price * $request->quantity;
