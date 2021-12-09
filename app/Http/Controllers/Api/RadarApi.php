<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RadarApi extends Controller
{
    public function index($query =null)
    {
        $master = DB::select("
        SELECT 
            categorie_matiere, COUNT(categorie_matiere) as nb
        FROM 
            metacomp
        WHERE
            formation_id = $query
        
        GROUP BY 
            categorie_matiere
        
        ");
        
        return response()->json($master);
    }
}