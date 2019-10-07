<?php 

namespace App\Domains\Personnel;

class FullTimeEmployee extends Employee 
{
  public function __construct(string $fullName, int $monthlyIncome) 
  {
      parent::__construct($fullName, $monthlyIncome);
      $this->setNbHoursPerWeek(40);
  }
  public function requestTimeOff(int $nbDays, Employee $manager) {
    return("Time off request for full time employee " .
    $this->getFullName() .
    "; Nb days " . $nbDays .
    "; Requested from ". $manager->getFullName());
  }
}