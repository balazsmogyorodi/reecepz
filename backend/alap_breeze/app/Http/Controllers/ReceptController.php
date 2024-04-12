<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return DB::table('recepteks as r')
      ->select('*')
      ->join('kategorias as k', 'r.kat_id', '=', 'k.id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recept = new Receptek();
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat_id;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
        $recept->save();
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
       Receptek::find($id)->delete();
    }
}
