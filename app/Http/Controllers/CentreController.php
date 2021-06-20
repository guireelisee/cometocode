<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Kartier;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // $centre = Centre::find(1);
        // dd($centre->kartier->nom);
        $centres = Centre::all();
        return view('backend.admin.centres.index', compact('centres'));
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
        return view('backend.admin.centres.create',compact('centres','secteurs'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required|string|max:30',
            'kartier_id' => 'nullable|integer',
        ]);

        Centre::create($request->all());
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
}
