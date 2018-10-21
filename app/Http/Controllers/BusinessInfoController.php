<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessInfoController extends Controller
{
    public function index()
    {
        return view('business_info.edit');
    }
}
