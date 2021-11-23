<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoMasterApi extends Controller
{
    public function index($query =null)
    {
        $master = DB::select("
        SELECT
            *
        FROM 
            dnhdanglosaxon_data
        WHERE
            localisation IS NOT NULL and id = $query
        
        ORDER BY
            nom_formation
        
        ");
        
        return response()->json($master);
    }
}