<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            [
                "name" => "Alice",
                "email" => "alice@example.com",
                "phone" => "12345678",
                "salary" => "200000",
                "department" => "Accounting",
            ],
            [
                "name" => "Andrew",
                "email" => "andrew@example.com",
                "phone" => "22334455",
                "salary" => "220000",
                "department" => "Marketting",
            ],
            [
                "name" => "Mike",
                "email" => "mike@example.com",
                "phone" => "012345678",
                "salary" => "210000",
                "department" => "Quality",
            ],
            [
                "name" => "Sophie",
                "email" => "sopie@example.com",
                "phone" => "1122334455",
                "salary" => "180000",
                "department" => "Accounting",
            ],
            [
                "name" => "Steve",
                "email" => "steve@example.com",
                "phone" => "12345678",
                "salary" => "250000",
                "department" => "Marketting",
            ],
        ];
        Employee::insert($employees);

        return "Records are inserted";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }
}
