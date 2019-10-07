<?php 

namespace App\Domains\Personnel;

class Intern extends Employee 
{
  public function __construct(string $fullName, int $monthlyIncome, int $nbHours) 
  {
      parent::__construct($fullName, $monthlyIncome);
      $this->setNbHoursPerWeek($nbHours);
  }
  public function requestTimeOff(int $nbDays, Employee $manager) {
    return("Time off request for full time employee " .
    $this->getFullName() .
    "; Nb days " . $nbDays .
    "; Requested from ". $manager->getFullName());
  }
}