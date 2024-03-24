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
        $query = Rp::filter($request->all());
        // return response()->json($query->get());
        // count all employees
        $all_employees = $query->count();
        // avg employee's age
        $avg_employee_age = $query->avg('yoshi');
        // count all gender employee
        $all_genders = $query->select('jinsi', \Illuminate\Support\Facades\DB::raw('count(*) as total'))->groupBy('jinsi')->get();
        // count all Nation
        $all_nation = $query->groupBy('millati')->count()->get();

        $result = array_merge([
            'all_employees' => $all_employees,
            'all_gender_counts' => $all_genders,
            'all_nation_counts' => $all_nation,
        ]);
        return response()->json($result);
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
