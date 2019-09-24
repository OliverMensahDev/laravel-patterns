<?php 
namespace App\Domains\Taxes;

use App\Domains\Personnel\Employee;

class PartTimeTaxCalculator implements ITaxCalculator {
  private $RETIREMENT_TAX_PERCENTAGE = 5;
  private $INCOME_TAX_PERCENTAGE = 16;
  private $BASE_HEALTH_INSURANCE = 100;

  public function calculate(Employee $employee) {
      $monthlyIncome = $employee->getMonthlyIncome();
      return $this->BASE_HEALTH_INSURANCE +
            ($monthlyIncome * $this->RETIREMENT_TAX_PERCENTAGE) / 100 +
            ($monthlyIncome * $this->INCOME_TAX_PERCENTAGE) / 100;
  }
}
