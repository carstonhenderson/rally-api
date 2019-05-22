<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        return view('insights.index');
    }
}
