<?php

namespace LaraStart\Http\Controllers;

use Illuminate\Http\Request;
use LaraStart\Country;
use LaraStart\City;
use Illuminate\Support\Facades\Hash;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('city.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::orderBy('id', 'desc')->pluck('name', 'id');
        return view('city.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->id_country = $request->input('id_country');
        $city->slug = $request->input('name');
        $city->visible = $request->input('visible') ? 1 : 0;

        $city->save();

        return "Saved";
    }

    public function show(City $city)
    {
        //return view('city.show', compact('city'));
    }

    public function edit(City $city)
    {
        $countries = Country::orderBy('id', 'desc')->pluck('name', 'id');

        return view('city.edit', compact('countries', 'city'));
    }

    public function update(Request $request, City $city)
    {
        $city->fill($request->all());
        $city->visible = $request->has('visible') ? 1 : 0;
        $city->slug = $request->input('name');
        $city->save();

        return "Updated";
    }

    public function destroy($id)
    {
        //
    }

    public function byCountry($id) 
    {
        return City::where('id_country', $id)->get();
    }
}
