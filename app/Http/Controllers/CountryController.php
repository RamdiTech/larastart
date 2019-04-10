<?php

namespace LaraStart\Http\Controllers;

use Illuminate\Http\Request;
use LaraStart\Country;
use LaraStart\City;
use Illuminate\Support\Facades\Hash;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $country = new Country();
        $country->name = $request->input('name');
        $country->visible = $request->has('visible') ? 1 : 0;
        $country->slug = $request->input('name');

        $country->save();

        return "Saved";
    }

    public function show($id)
    {
        //return view('country.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->fill($request->all());
        $country->visible = $request->has('visible') ? 1 : 0;
        $country->slug = $request->input('name');
        $country->save();

        return "Updated";
    }

    public function destroy($id)
    {
        //
    }
}
