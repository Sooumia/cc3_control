<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Auteur;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class dashbordlivrecontroller extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::all();
        $auteurs = Auteur::all();
        $categories = Categorie::all(); 
        $users = User::all();

        return view('admin.dashbordlivre.dashbord', compact('livres', 'auteurs', 'categories'));
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
        return view('admin.dashbordlivre.create', compact('auteurs', 'categories'));
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
            'prix_Livre' => 'required',
            'Auteur_id' => 'required',
            'Categorie_id' => 'required',
            'image_Livre' => 'required|image',
        ]);

        $livre = new Livre();
        $livre->ISBN_Livre = $request->ISBN_Livre;
        $livre->titre_Livre = $request->titre_Livre;
        $livre->description_Livre = $request->description_Livre;
        $livre->prix_Livre = $request->prix_Livre;
        $livre->Auteur_id = $request->Auteur_id;
        $livre->Categorie_id = $request->Categorie_id;

        //$path = $request->file('image_Livre')->store('public/images');

        $image = $request->file('image_Livre');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        $livre->image_Livre = 'images/' . $imageName;


        $livre->save();

        return redirect()->route('dashbordlivre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Livre::find($id);

        return response()->view("admin.dashbordlivre.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Livre::find($id);
        $auteurs = Auteur::all();
        $categories = Categorie::all();
        return response()->view("admin.dashbordlivre.edit", compact("article", 'auteurs', 'categories'));
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
        $livre = Livre::findOrFail($id);

        $request->validate([
            'ISBN_Livre' => 'required',
            'titre_Livre' => 'required',
            'description_Livre' => 'required',
            'prix_Livre' => 'required|numeric',
            'Auteur_id' => 'required|exists:auteurs,id',
            'Categorie_id' => 'required|exists:categories,id',
        ]);

        $livre->update([
            'ISBN_Livre' => $request->input('ISBN_Livre'),
            'titre_Livre' => $request->input('titre_Livre'),
            'description_Livre' => $request->input('description_Livre'),
            'prix_Livre' => $request->input('prix_Livre'),
            'Auteur_id' => $request->input('Auteur_id'),
            'Categorie_id' => $request->input('Categorie_id'),
        ]);

        return redirect()->route('dashbordlivre.index')->with('success', 'Article bien modifié');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    Livre::find($id)->delete();
    return redirect()->route("dashbordlivre.index")->with("success", "Article bien supprime");
}
}
