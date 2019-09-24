<?php 
namespace App\Domains\Taxes;

use App\Domains\Personnel\Employee;

interface ITaxCalculator {
  public function calculate(Employee $employee);
}