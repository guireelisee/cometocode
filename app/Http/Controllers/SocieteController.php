<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Societe;
use App\Models\Centre;
use App\Models\Kartier;
use App\Models\Societe as ModelsSociete;
use App\Models\SocieteCentre;
use Illuminate\Http\Request;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteurs = Kartier::all();
        $entreprises = ModelsSociete::all();
        return view('backend.admin.entreprises.index', compact('secteurs','entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centres = Centre::all();
        $secteurs = Kartier::all();
        // dd($entreprises);
        return view('backend.admin.entreprises.create',compact('centres','secteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsSociete::create($request->all());
        return back()->with("message", "Enregistré avec succès");
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
        $entreprise = ModelsSociete::find($id);
        // dd();
        $centres = Centre::all();
        $secteurs = Kartier::all();
        return view('backend.admin.entreprises.edit',compact('entreprise', 'centres', 'secteurs'));
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
        $entreprise = ModelsSociete::find($id);

        $centres = $request->centre_id;
        foreach ($centres as $value) {
            SocieteCentre::create([
                'centre_id' => $value,
                'societe_id' => $id,
            ]);
        }
        return redirect()->route('gest-societe.index')->with('Message', 'Modification réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = ModelsSociete::find($id);
        $entreprise->delete;
        return back();
    }
}
