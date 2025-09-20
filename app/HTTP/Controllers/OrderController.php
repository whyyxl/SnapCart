<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function place(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $request->total,
            'status' => 'pending'
        ]);

        return response()->json($order, 201);
    }

    public function history()
    {
        return response()->json(Order::where('user_id', auth()->id())->get());
    }
}
