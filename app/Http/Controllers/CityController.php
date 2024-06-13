<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;

class CityController extends Controller
{
    public function index(County $county)  {
//        $cities = City::all()->where('name', 'like', '%' . $county->name . '%');
        $cities = $county->cities;
        return response()->json($cities);
    }

    public function store()
    {
//        dd(request()->get('cityname'));
        $validatedParams = request()->validate([
            'city_name' => 'required',
            'county_id' => 'required|exists:counties,id'
        ]);

        City::create([
            'name' => $validatedParams['cityname'],
            'county_id' => $validatedParams['county_id']
        ]);;
    }
}
