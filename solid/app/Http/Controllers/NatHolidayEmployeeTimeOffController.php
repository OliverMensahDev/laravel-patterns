<?php

namespace App\Http\Controllers;

use App\Domains\Personnel\FullTimeEmployee;
use App\Models\EmployeeModel;

class NatHolidayEmployeeTimeOffController extends Controller
{

  private $employees;
  public function __construct()
  {
      $this->employees = EmployeeModel::all();
  }

  public function requestTimeOff() 
  {
    $timeOffs = [];
    foreach($this->employees as $employee){
      $newEmployee = new FullTimeEmployee($employee->fullName, $employee->monthlyIncome);
      $timeOffs[] = $newEmployee->requestTimeOff(4, $newEmployee);
    }
    return $timeOffs;
  }
}
