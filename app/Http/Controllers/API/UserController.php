<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $employees->load('company');
        return response()->json($employees);
    }
}
