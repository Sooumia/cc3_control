<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{ 
    // Afficher la page de paiement
    public function checkout()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        $books_id = $cartItems->pluck('book_id')->toArray();
        $total = 0;

        foreach ($cartItems as $cartItem) {
            if ($cartItem->livre) {
                $total += $cartItem->livre->prix_Livre;
            }
        }

        return view('livres.paymentcheckout', compact('cartItems', 'books_id', 'total'));
    }
 
    // Traiter le paiement
    public function processPayment(Request $request)
    {
        $validatedData = $request->validate([
            'delivery_phone' => 'required',
            'delivery_address' => 'required',
            'books_id' => 'required',
            'total' => 'required',
        ]);
        $booksId = explode(',', $validatedData['books_id']);

        Payment::create([
            'user_id' => Auth::id(),
            'book_ids' => json_encode($booksId),
            'payment_method' => 'payment in delivery',
            'payment_date' => now(),
            'status' => 'pending',
            'total_price' => $validatedData['total'],
            'delivery_address' => $validatedData['delivery_address'],
            'delivery_phone' => $validatedData['delivery_phone'],
        ]);



        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('livres.index')->with('success', 'Payment successful!');
    }



}
