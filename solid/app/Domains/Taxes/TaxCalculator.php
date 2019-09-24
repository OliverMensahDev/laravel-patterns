<?php 
namespace App\Domains\Taxes;

use App\Domains\Personnel\Employee;
use App\Domains\Personnel\FullTimeEmployee;
use App\Domains\Personnel\Intern;
use App\Domains\Personnel\PartTimeEmployee;

class TaxCalculator{
  private $RETIREMENT_TAX_PERCENTAGE = 10;
  private $INCOME_TAX_PERCENTAGE = 16;
  private $BASE_HEALTH_INSURANCE = 100;


  public function calculate(Employee $employee) {
      $monthlyIncome = $employee->getMonthlyIncome();
      if($employee instanceof FullTimeEmployee){
          return $this->BASE_HEALTH_INSURANCE +
                  ($monthlyIncome * $this->RETIREMENT_TAX_PERCENTAGE) / 100 +
                  ($monthlyIncome * $this->INCOME_TAX_PERCENTAGE) / 100;
      }
      if($employee instanceof PartTimeEmployee){
          return $this->BASE_HEALTH_INSURANCE +
                  ($monthlyIncome * 10) / 100 +
                  ($monthlyIncome * $this->INCOME_TAX_PERCENTAGE) / 100;
      }
      if($employee instanceof Intern){
          if($monthlyIncome < 350){
              return 0;
          }else{
              return  ($monthlyIncome * $this->INCOME_TAX_PERCENTAGE) / 100;
          }
      }
      return 0;
  }
}
