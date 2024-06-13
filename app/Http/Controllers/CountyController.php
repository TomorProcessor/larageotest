<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function index() {
//        dd(County::all());
        return response()->json(County::all());
    }

    public function show(County $county) {
        return response()->json($county);
    }
}
