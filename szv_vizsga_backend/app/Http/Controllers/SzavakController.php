<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return szavak::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(szavak $szavak)
    {
        //
    }

    public function szavak_temaval($temaId){
        return szavak::with('tema')
        ->where('temaId',$temaId)
        ->get();
    }
}
