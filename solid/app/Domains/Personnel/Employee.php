<?php 

namespace App\Domains\Personnel;

abstract class Employee
{
  private $firstName;
  private $lastName;
  private $monthlyIncome;
  private $nbHoursPerWeek;


  public function __construct($fullName, $monthlyIncome)
  {
    $this->setMonthlyIncome($monthlyIncome);
    $names = explode(" ", $fullName);
    $this->firstName = $names[0];
    $this->lastName =  $names[1];
  }

  public function getEMail(): string
  {
    return $this->firstName. "." . $this->lastName . "@globomanticshr.com";
  }

  public function toString() 
  {
    return $this->firstName . " " .  $this->lastName . " - " . $this->monthlyIncome;
  }

  // public abstract function requestTimeOff(int $nbDays, Employee $manager);


  public function getMonthlyIncome() : int 
  {
    return $this->monthlyIncome;
  }

  public function setMonthlyIncome(int $monthlyIncome): void
  {
      if($monthlyIncome < 0){
          throw new \Exception("Income must be positive");
      }
      $this->monthlyIncome = $monthlyIncome;
  }

  public function getNbHoursPerWeek(): int
  {
      return $this->nbHoursPerWeek;
  }

  public function setNbHoursPerWeek(int $nbHoursPerWeek): void 
  {
      if($nbHoursPerWeek <= 0){
          throw new \Exception("Income must be positive");
      }
      $this->nbHoursPerWeek = $nbHoursPerWeek;
  }

  public function getFullName(): string
  {
      return $this->firstName . " " . $this->lastName;
  }

  public  abstract function requestTimeOff(int $nbDays, Employee $manager);

}