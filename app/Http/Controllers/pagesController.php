<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('employees.employees');
    }
    // accounts ..
    function accounts(){
        return view('accounts.acounts');
    }
}
