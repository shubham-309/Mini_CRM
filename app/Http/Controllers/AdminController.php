<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Support\Facades\File;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index1()
    {
        return view('admin.dashboard');
    }

}
