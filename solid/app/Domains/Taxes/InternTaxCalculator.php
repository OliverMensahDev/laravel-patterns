<?php 
namespace App\Domains\Taxes;

use App\Domains\Personnel\Employee;

class InternTaxCalculator implements ITaxCalculator {
  private $INCOME_TAX_PERCENTAGE = 16;

  public function calculate(Employee $employee) {
      $monthlyIncome = $employee->getMonthlyIncome();
      if($monthlyIncome < 350){
        return 0;
    }else{
        return  ($monthlyIncome * $this->INCOME_TAX_PERCENTAGE) / 100;
    }
  }
}
