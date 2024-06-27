<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityStorePostRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Models\City;
use App\Models\County;
use App\Http\Resources\CityResource;

class CityController extends Controller
{
    public function index(County $county)  {
        $cities = $county->cities;
        return new CityResource($cities);
    }

    public function store(CityStorePostRequest $request)
    {
        $validatedParams = $request->validated();

        $city = City::create([
            'name' => $validatedParams['city_name'],
            'county_id' => $validatedParams['county_id']
        ]);;

        return new CityResource($city);
    }

    public function destroy(City $city)
    {
        $city->delete();
        return new CityResource($city);
    }

    public function update(CityUpdateRequest $request, City $city)
    {
        $validatedParams = $request->validated();
        $city->update([
            'name' => $validatedParams['city_name']
        ]);

        return new CityResource($city);
    }
}
