<?php 
namespace App\Http\Controllers;

use App\Domains\Documents\Payslip;
use App\Domains\Personnel\FullTimeEmployee;
use App\Models\EmployeeModel;

class ExportPayslipController extends Controller
{
  private $employees;
  public function __construct()
  {
      $this->employees = EmployeeModel::all();
  }

  public function requestPayslip() 
  {
    $payslips = [];
    foreach($this->employees as $employee){
      $newEmployee = new FullTimeEmployee($employee->fullName, $employee->monthlyIncome);
      $payslip = new Payslip($newEmployee, "Jan");
      $payslips = $payslip->toTxt();
    }
    return $payslips;
  }
}