<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterApi extends Controller
{
    public function index($query =null)
    {
        $master = DB::select("
        SELECT
            nom_formation, id, localisation, pays
        FROM 
            dnhdanglosaxon_data
        WHERE
            nom_formation LIKE '".$query."' OR localisation IS NOT NULL
        
        ORDER BY
            nom_formation
        
        ");
        
        return response()->json($master);
    }
}