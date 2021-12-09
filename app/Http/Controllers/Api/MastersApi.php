<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MastersApi extends Controller
{
    public function index($query =null)
    {
        $master = DB::select("
        SELECT
            *
        FROM 
            mytable
        WHERE
            localisation IS NOT NULL
        
        ORDER BY
            nom_formation
        
        ");
        
        return response()->json($master);
    }
}