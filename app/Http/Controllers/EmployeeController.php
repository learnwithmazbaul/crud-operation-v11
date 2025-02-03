<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::latest()->get();
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
    public function EditPage($id) {
        $employee = Employee::where('id',$id)->first();
        return view('pages.edit',['employee'=>$employee]);
    }//end method
    public function Update(Request $request,$id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$id,
            'phone' => 'required'
        ]);
        Employee::where('id',$id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        flash()->success('Employee updated successfully.');
        return redirect()->route('employee.index');
    }//end method

    public function Delete($id){
        Employee::where('id',$id)->delete();
        sweetalert()->success('Employee deleted successfully.');
        return redirect()->route('employee.index');
    }

}
