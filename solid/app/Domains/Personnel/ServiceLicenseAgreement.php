<?php 

namespace App\Domains\Personnel;

class ServiceLicenseAgreement
{
  private $minUptimePercent;
  private $problemResolutionTimeDays;

  public function  __construct(int $minUptime, int $problemResolutionTimeDays)
  {
    $this->minUptimePercent = $minUptime;
    $this->problemResolutionTimeDays = $problemResolutionTimeDays;
  }
  public function getMinUptimePercent() 
  {
    return $this->minUptimePercent;
  }

  public function getProblemResolutionTimeDays() 
  {
    return $this->problemResolutionTimeDays;
  }
}
