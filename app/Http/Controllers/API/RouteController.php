<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {

        $routes = Route::query();

        if($request->district_id){
            $routes = $routes->where('district_id',$request->district_id);
        }

        $routes = $routes->get();

        return response()->json(['routes' => $routes,'message' => 'Routes get'], 200);
    }
}
