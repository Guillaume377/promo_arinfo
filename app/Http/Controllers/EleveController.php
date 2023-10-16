<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('eleves/index', [
            'eleves' => Eleve::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {
        $request->validate([
            'nom' => 'required|string|min:3|max:50',
            'prenom' => 'required|string|min:3|max:25',
            'age' => 'required|int|min:2|max:2',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'diplome' => 'required|string',
        ]);

        $eleve= Eleve::create($request->all());

        return back()->with('message', 'Elève créé avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        $eleve->load('eleve');

        return view('eleves/show', ['eleve' => $eleve]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('eleves/edit', [
            'eleve' => Eleve::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'nom' => 'required|string|min:3|max:50',
            'prenom' => 'required|string|min:3|max:25',
            'age' => 'required|int|min:2|max:2',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'diplome' => 'required|string',
        ]);

        $eleve->update($request->except('_token'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();
        return back()->with('message', 'Elève supprimé avec succès');
    }
}
