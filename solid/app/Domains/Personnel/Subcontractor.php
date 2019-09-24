<?php 

namespace App\Domains\Personnel;

class Subcontractor
{
  private $fullName;
  private $email;
  private $monthlyIncome;
  private $nbHoursPerWeek;


  public function __construct($name, $email, $monthlyIncome, $nbHoursPerWeek)
  {
    $this->fullName = $name;
    $this->email =  $email;
    $this->monthlyIncome = $monthlyIncome;
    $this->nbHoursPerWeek = $nbHoursPerWeek;
  }

  public function approveSLA(ServiceLicenseAgreement $sla): bool 
  {
    /*
    Business logic for approving a
    service license agreement for a
    for a subcontractor
     */
    return ($sla->getMinUptimePercent() >= 98  && $sla->getProblemResolutionTimeDays() <= 2);
  }
}