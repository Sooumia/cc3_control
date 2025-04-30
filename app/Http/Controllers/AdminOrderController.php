<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        // Récupérer toutes les commandes pour les afficher dans le tableau de bord
        $orders = Payment::all();

        return view('admin.order.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valider la requête
        $validatedData = $request->validate([
            'status' => 'required|in:pending,processing,completed',
        ]);

        // Trouver la commande
        $order = Payment::findOrFail($id);

        // Mettre à jour le statut
        $order->status = $validatedData['status'];
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Trouver la commande
        $order = Payment::findOrFail($id);

        // Supprimer la commande
        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
   

  
}


