<?php 

namespace App\Domains\Personnel;

use App\Models\EmployeeType;

class PartTimeEmployee extends Employee 
{
  public function __construct(string $fullName, int $monthlyIncome) 
  {
      parent::__construct($fullName, $monthlyIncome);
      $this->setNbHoursPerWeek(20);
  }
  
  public function requestTimeOff(int $nbDays, Employee $manager) {
    return("Time off request for full time employee " .
    $this->getFullName() .
    "; Nb days " . $nbDays .
    "; Requested from ". $manager->getFullName());
  }

  public function type()
  {
    return EmployeeType::PartTime;
  }
}