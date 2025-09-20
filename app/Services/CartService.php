<?php

namespace App\Services;

use App\Models\CartItem;

class CartService
{
    public function addItem($productId, $quantity)
    {
        return CartItem::create([
            'product_id' => $productId,
            'quantity' => $quantity,
            'user_id' => auth()->id()
        ]);
    }

    public function getCart()
    {
        return CartItem::where('user_id', auth()->id())->get();
    }

    public function removeItem($productId)
    {
        CartItem::where('user_id', auth()->id())
                ->where('product_id', $productId)
                ->delete();
    }
}
