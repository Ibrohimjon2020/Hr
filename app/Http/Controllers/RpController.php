<?php

namespace App\Http\Controllers;

use App\Models\Rp;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RpImport; 

class RpController extends Controller
{
    public function index(Request $request)
    {
        $query = Rp::filter($request->all())->orderBy('id', 'desc');
        // count all employees
        $all_employees = $query->count();
        // avg employee's age
        $avg_employee_age = $query->avg('yoshi');
        // count all mens employee
        $all_mens = $query->where(['jinsi'=> 'Erkak'])->count();
        // count all womens employee
        $all_womens = $query->where(['jinsi'=> 'Ayol'])->count();
        // count all Nation
        $all_nation = $query->groupBy('millati')->count();
        $result = array_merge([
            'all_employees' => $all_employees,
        ]);
        return response()->json($query->get());
    }

    public function uploadExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);
        
        $file = $request->file('file');
        
        Excel::import(new RpImport, $file);
        
        return response()->json(['message' => 'Excel file uploaded and data imported successfully']);
    }
}
