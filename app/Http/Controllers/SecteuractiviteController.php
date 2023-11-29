<?php

namespace App\Http\Controllers;

use App\Models\secteuractivite;
use Illuminate\Http\Request;

class SecteuractiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secteuractivite =secteuractivite::all();
        return view('secteuractivite.list', compact('secteuractivite'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);
        secteuractivite::create($request->all());
        return redirect()->route('secteur.index')
            ->with('success', 'secteuractivite created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(secteuractivite $secteuractivite)
    {
        $secteuractivite=secteuractivite::find($id);
        return view('secteuractivites.show', compact('secteuractivite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(secteuractivite $secteuractivite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, secteuractivite $secteuractivite)
    {
        $request->validate([
            'libelle' => 'required',
            'description' => 'required',
        ]);
        $secteuractivite->update($request->all());
        return redirect()->route('secteuractivites.index')
            ->with('success', 'secteuractivite updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(secteuractivite $secteuractivite)
    {
        $secteuractivite->find($id)->delete();
    }
}
