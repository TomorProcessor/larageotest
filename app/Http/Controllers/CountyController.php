<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;
use App\Http\Resources\CountyResource;
use App\Http\Resources\CountyResourceCollection;

class CountyController extends Controller
{
    public function index() {
//        dd(County::all());
        return new CountyResourceCollection(County::all());
//        return response()->json(County::all());
    }

    public function show(County $county) {
        return new CountyResource($county);
    }
}
