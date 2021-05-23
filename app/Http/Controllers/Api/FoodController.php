<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        
        $food=Food::where('created_at',date());
        if ($request->has('category')) {
            $food->where('category',$request->category);
        }
        $food->get();
        return response()->json($food);
    }
    public function create()
    {
        return view('admin.admin.dashboard');
    }
    public function store()
    {
        return view('admin.admin.dashboard');
    }
    public function delete()
    {
        return view('admin.admin.dashboard');
    }
   
}
