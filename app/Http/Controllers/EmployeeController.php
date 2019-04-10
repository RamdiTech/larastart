<?php

namespace LaraStart\Http\Controllers;

use Illuminate\Http\Request;
use LaraStart\Country;
use LaraStart\City;
use LaraStart\Employee;
use LaraStart\Http\Requests\ValidationEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $countries = Country::orderBy('id', 'desc')->pluck('name', 'id');
        return view('employee.create', compact('countries'));
    }

    public function store(ValidationEmployeeRequest $request)
    {

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->country_id = $request->input('country_id');
        $employee->city_id = $request->input('city_id');
        $employee->slug = $request->input('name').$request->input('last_name');

        $employee->save();

        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        //return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $countries = Country::orderBy('id', 'desc')->pluck('name', 'id');
        $cities = City::orderBy('id', 'desc')->pluck('name', 'id');

        return view('employee.edit', compact('countries', 'cities', 'employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->fill($request->all());
        $employee->slug = $request->input('name').$request->input('last_name');
        $employee->save();

        return redirect()->route('employees.index')->with('status', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
