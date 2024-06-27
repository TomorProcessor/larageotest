<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityStorePostRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Models\City;
use App\Models\County;

class CityController extends Controller
{
    public function index(County $county)  {
        $cities = $county->cities;
        return response()->json($cities);
    }

    public function store(CityStorePostRequest $request)
    {
        $validatedParams = $request->validated();

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

    public function update(CityUpdateRequest $request, City $city)
    {
        $validatedParams = $request->validated();
        $city->update([
            'name' => $validatedParams['city_name']
        ]);

        return response()->json($city);
    }
}
