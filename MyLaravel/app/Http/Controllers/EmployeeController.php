<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $emps = Employee::all();
      return view('index', compact('emps'));
    }
    public function show($id){
      $emp = Employee::findOrFail($id);
      return view('show', compact('emp'));
    }
}
