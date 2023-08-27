<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee;
class pagesController extends Controller
{
    function dashboard(){
        return view('welcome');
    }
    //
    function new_employee(){
        return view('employees.create');
    }
    // all employees
    function all_employee(){
        $employees = employee::orderby('id','desc')->get();
        return view('employees.employees',compact('employees'));
    }
    // delete employee
    function delete_employee($id){
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->back()->with('delete','Employee Deleted Successfully');
    }
    // employee edit ..
    function edit_employee($id){
        $employee = employee::find($id);
        return view('employees.edit',compact('employee'));
    }
    function update_employee($id , Request $request){
        $employee = employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->idcard = $request->id;
        $employee->salary = $request->salary;
        $employee->whatsapp = $request->wp;
        $employee->save();
        return redirect(route('all.employee'))->with('message','Employee Updated Succesfully');
        
    }
    // save all_employee
    function save_employee(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:8',
            'email' => 'required|unique:employees',
            'id' => 'required|min:13|max:13',
            'wp' => 'required',
            'salary' => 'required'
        ]);
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->idcard = $request->id;
        $employee->salary = $request->salary;
        $employee->whatsapp = $request->wp;
        $employee->save();
        return redirect()->back()->with('message','Employee Added Succesfully');
    }

    // accounts ..
    function accounts(){
        $employees = employee::orderby('id','desc')->get();
        $salary_sum = employee::sum('salary');
        return view('accounts.acounts',compact('employees','salary_sum'));
    }
    // current month account
    function current_month_account(){
        return "test";
    }
}
