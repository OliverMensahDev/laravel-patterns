<?php 

namespace App\Services;

use App\Domains\Personnel\FullTimeEmployee;
use App\Domains\Personnel\Intern;
use App\Domains\Personnel\PartTimeEmployee;
use App\Models\EmployeeType;

class EmployeeFactory
{
  public static function create(object $request)
  {
    $employeeType = strtolower($request->type);
    if( $employeeType == EmployeeType::Intern){
      return new Intern($request->fullName, $request->monthlyIncome, $request->nbHoursPerWeek);
    }
    if( $employeeType == EmployeeType::FullTime){
      return new FullTimeEmployee($request->fullName, $request->monthlyIncome);
    }
    if( $employeeType == EmployeeType::PartTime){
      return new PartTimeEmployee($request->fullName, $request->monthlyIncome);
    }
    throw new \Exception("Invalid Employee Type");
  } 
}

