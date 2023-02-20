<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createEmployee()
    {
        return view('createEmployee');
    }
    public function storeEmployee(Request $request)
    {
        Employee::create([
            'Name' => $request->Name,
            'Date' => $request->Date,
            'Age' => $request->Age,
            'Address' => $request->Address,

        ]);
        return redirect('/');
    }
    public function show()
    {
        $employees = Employee::all();
        return view('welcome', compact('employees'));
    }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('editEmployee', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        Employee::findOrFail($id)->update([
            'Name' => $request->Name,
            'Date' => $request->Date,
            'Age' => $request->Age,
            'Address' => $request->Address,
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        Employee::destroy($id);
        return redirect('/');

    }
}