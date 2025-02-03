<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('pages.index',compact('employees'));
    }
    public function createPage() {
        return view('pages.create');
    }

    public function Store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required'
        ]);
        Employee::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        flash()->success('Employee created successfully.');
        return redirect()->route('employee.index');
    }
    public function EditPage() {
        return view('pages.edit');
    }
}
