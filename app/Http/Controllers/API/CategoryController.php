<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return response()->json(['categories' => $categories,'message' => 'Categories get'], 200);
    }
}
