<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('promos/index', [
            'promos' => Promo::all(),
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
    public function store(Request $request)
    {
        $request->validate([
            'diplome_id' => 'required|int|max:1',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        $promo = Promo::create($request->all());

        return back()->with('message', 'Promo créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        $promo->load('promos');

        return view('promos/show', ['promo' => $promo]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('promos/edit', [
            'promos' =>$promo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'diplome_id' => 'required|int|max:1',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        $promo->update($request->except('_token'));

        return back()->with('message', 'Promo modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();
        return back()->with('message', 'Promo supprimée avec succès');
    }
}
