<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        $food=Sport::where('created_at',date());
        if ($request->has('category')) {
            $food->where('category',$request->category);
        }
        $food->get();
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
