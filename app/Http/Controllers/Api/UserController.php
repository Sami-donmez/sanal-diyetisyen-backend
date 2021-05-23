<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.admin.dashboard');
    }
    public function me()
    {
        $data=auth()->user()->select('name','email')->get()->toArray();

        return json($data);
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
