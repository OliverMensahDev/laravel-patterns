<?php 

namespace App\Services;

use App\Domains\Personnel\FullTimeEmployee;
use App\Domains\Personnel\Intern;
use App\Domains\Personnel\PartTimeEmployee;
use App\Domains\Taxes\TaxCalculatorFactory;
use App\Models\EmployeeModel;

class TaxRepository
{
  private $taxes = [];
  public function calculate()
  {
    $employees = EmployeeModel::all();
    foreach($employees as $employee){
      $employeeTmp = new PartTimeEmployee($employee->fullName, $employee->monthlyIncome);
      $employeeTmp = new FullTimeEmployee($employee->fullName, $employee->monthlyIncome);
      $employeeTmp = new Intern($employee->fullName, $employee->monthlyIncome, $employee->nbHoursPerWeek);
      $taxCalculator = TaxCalculatorFactory::create($employeeTmp);
      $this->taxes[$employee->fullName] =  $taxCalculator->calculate($employeeTmp);
    }

    return $this->taxes;
  }

}