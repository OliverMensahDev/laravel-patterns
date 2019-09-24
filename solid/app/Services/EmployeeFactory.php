<?php 

namespace App\Services;

use App\Domains\Personnel\FullTimeEmployee;
use App\Domains\Personnel\Intern;
use App\Domains\Personnel\PartTimeEmployee;
use Illuminate\Http\Request;

class EmployeeFactory
{
  public static function create(Request $request)
  {
    if($request->employeeType == "Intern"){
      return new Intern($request->fullName, $request->monthlyIncome, $request->nbHoursPerWeek);
    }
    if($request->employeeType == "FullTime"){
      return new FullTimeEmployee($request->fullName, $request->monthlyIncome);
    }
    if($request->employeeType == "PartTime"){
      return new PartTimeEmployee($request->fullName, $request->monthlyIncome);
    }
    return new \Exception("Invalid Employee Type");
  } 
}

