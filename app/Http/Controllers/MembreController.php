<?php

namespace App\Http\Controllers;

use App\Models\membre;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\departement;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menbre =membre::all();
        $departement =departement::all();
       
        return view('membres.liste', compact('menbre','departement'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'departement_id' => 'required',
            'role_id' => 'required',
            'password' => 'required',
        ]);
$membre=membre::create($request->all());
        return redirect()->route('membres.liste')
            ->with('success', 'membre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(membre $membre)
    {
    $membre=membre::find($id);
        return view('membres.show', compact('membre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(membre $membre)
    {
        $membre=membre::find($id);
        return view('membres.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, membre $membre)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'departement_id' => 'required',
            'role_id' => 'required',
            'password' => 'required',
        ]);
        $membre->update($request->all());
        return redirect()->route('membres.liste')
            ->with('success', 'membre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(membre $membre)
    {
        $membre->delete();
        return redirect()->route('membres.liste')
            ->with('success', 'membre deleted successfully');
    }
}
