<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;

class CityController extends Controller
{
    public function index(County $county)  {
        $cities = $county->cities;
        return response()->json($cities);
    }

    public function store()
    {
        $validatedParams = request()->validate([
            'city_name' => 'required',
            'county_id' => 'required|exists:counties,id'
        ]);

        $city = City::create([
            'name' => $validatedParams['city_name'],
            'county_id' => $validatedParams['county_id']
        ]);;

        return response()->json($city);
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json($city);
    }

    public function update(City $city)
    {
        $validatedParams = request()->validate([
            'city_name' => 'required'
        ]);
        $city->update([
            'name' => $validatedParams['city_name']
        ]);

        return response()->json($city);
    }
}
