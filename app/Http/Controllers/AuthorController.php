<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuthorController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $auteurs = Auteur::all();
        return view('admin.author.index', compact('auteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
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
            'nom_auteur' => 'required',
            'prenom_auteur' => 'required',
            'pays_auteur' => 'required',
            'datenaissance_auteur' => 'required|date',
        ]);

        $auteur = Auteur::create($request->all());

        return redirect()->route('author.index')
            ->with('success', 'Auteur créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Auteur::findOrFail($id);
        return view('admin.author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auteur = Auteur::findOrFail($id);
        return view('admin.author.edit', compact('auteur'));
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
        $request->validate([
            'nom_auteur' => 'required',
            'prenom_auteur' => 'required',
            'pays_auteur' => 'required',
            'datenaissance_auteur' => 'required|date',
        ]);

        $author = Auteur::findOrFail($id);
        $author->update($request->all());

        return redirect()->route('author.index')
            ->with('success', 'Auteur mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Auteur::findOrFail($id);
        $author->delete();

        return redirect()->route('author.index')
            ->with('success', 'Auteur supprimé avec succès.');
    }
}