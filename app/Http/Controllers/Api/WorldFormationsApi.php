<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorldFormationsApi extends Controller
{
    public function index($query =null)
    {
        $master = DB::select("
        SELECT 
            Pays, COUNT(Pays) as nb
        FROM 
            mytable
        GROUP BY 
            Pays
        ORDER BY
          Pays
        
        ");
        
        return response()->json($master);
    }
}
