<?php 

namespace App\Domains\Personnel;

class FullTimeEmployee extends Employee 
{
  public function __construct(string $fullName, int $monthlyIncome) 
  {
      parent::__construct($fullName, $monthlyIncome);
      $this->setNbHoursPerWeek(40);
  }
}