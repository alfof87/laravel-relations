<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $emps = Employee::all();
      return view('index', compact('emps'));
    }
    public function show($id){
      $emp = Employee::findOrFail($id);
      return view('layouts.show', compact('emp'));
    }
    public function create(){
      $user = Location::all();
      return view('layouts.create', compact('user'));
    }
}
