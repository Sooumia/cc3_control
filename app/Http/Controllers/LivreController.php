<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Categorie;
use App\Models\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LivreController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::query()->paginate(10);
        $auteurs = Auteur::all();
        $categories = Categorie::all();

        return view('livres.index', compact('livres', 'auteurs', 'categories'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteurs = Auteur::all();
        $categories = Categorie::all();
        return view('livres.create', compact('auteurs', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ISBN_Livre' => 'required',
            'titre_Livre' => 'required',
            'description_Livre' => 'required',
            'quantite_Livre' => 'required',
            'prix_Livre' => 'required',
            'Auteur_id' => 'required',
            'Categorie_id' => 'required',
            'image_Livre' => 'required|image',
        ]);

        $livre = new Livre();
        $livre->ISBN_Livre = $request->ISBN_Livre;
        $livre->titre_Livre = $request->titre_Livre;
        $livre->description_Livre = $request->description_Livre;
        $livre->quantite_Livre = $request->quantite_Livre;
        $livre->prix_Livre = $request->prix_Livre;
        $livre->Auteur_id = $request->Auteur_id;
        $livre->Categorie_id = $request->Categorie_id;

        //$path = $request->file('image_Livre')->store('public/images');

        $image = $request->file('image_Livre');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        
        $livre->image_Livre = 'images/'.$imageName;


        $livre->save();

        return redirect()->route('livres.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livre = Livre::find($id);

        return view('livres.show', compact('livre'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function findByKeyword(Request $request){
        $titre_Livre = $request->input('keyword');
        $livres = Livre::query()->where('titre_Livre', '=', $titre_Livre)->get();
        $categories = Categorie::all();
        $auteurs = Auteur::all();

        return view('livres.results', compact('livres','categories', 'auteurs'));
    }
    
    public function findByCategory(Request $request)
{
    $categories = Categorie::all();
    $auteurs = Auteur::all();

    $id = $request->input('category');
    $categorie = Categorie::find($id);

    if ($categorie) {
        $livres = $categorie->livres;
    } else {
        $livres = [];
    }

    return view('livres.results', compact('livres', 'categories', 'auteurs'));
}
}
