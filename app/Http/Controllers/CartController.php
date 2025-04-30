<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


class CartController extends Controller
{ 

    public function addToCart(Request $request)
    {
        $user_id = Auth::id();
        $livre_id = $request->input('livre_id');

        $cart = new Cart(); 
        $cart->user_id = $user_id;
        $cart->book_id = $livre_id;
        $cart->save();

        return redirect()->route('livres.index')->with('success', 'Book added to cart successfully!');
    }
    public function removeFromCart(Request $request, $userId, $bookId)
    {
        $cartItem = Cart::where('user_id', $userId)
            ->where('book_id', $bookId)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Book removed from cart successfully!');
        } else {
            return redirect()->back()->with('error', 'Error removing book from cart!');
        }
    }
    public function showCart()
    {
        $cartItems = Cart::with('livre')->where('user_id', auth()->user()->id)->get();

        $total = 0;

        foreach ($cartItems as $cartItem) {
            $total += $cartItem->livre->prix_Livre ?? 0;
        }

        return view('livres.cart', compact('cartItems', 'total'));
    }
}