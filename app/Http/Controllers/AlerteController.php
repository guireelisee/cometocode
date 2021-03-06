<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use App\Models\Centre;
use Illuminate\Http\Request;

class AlerteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alertes = Alerte::all();
        return view('backend.admin.alertes.index', compact('alertes'));
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
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function show(Alerte $alerte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function edit(Alerte $alerte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $_GET['id'];
        Alerte::where('id',$id)->update(['etat'=> 0]);
        return redirect()->route('gest-alerte.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alerte $alerte)
    {
        //
    }

    public static function getAlerteByCentre($id)
    {
        return Alerte::where('centre_id',$id)->first();
    }

    public static function getSocieteByCentre($id)
    {
        return Societe::where('centre_id',$id)->first();
    }


}
