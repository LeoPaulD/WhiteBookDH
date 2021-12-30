<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('map.index');
    }

    public function show(Request $request,$id)
    {
        return view('map.show', compact('id'));
    }

    
}
