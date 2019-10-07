<?php 
namespace App\Domains\Payment;

use App\Domains\Notification\EmployeeNotifier;
use App\Domains\Personnel\FullTimeEmployee;
use App\Services\IEmployeeRepository;

class PaymentProcessor {

  private $employeeRepository;
  private $employeeNotifier;

  public function __construct(IEmployeeRepository $employeeRepository, EmployeeNotifier $employeeNotifier)
  {
    $this->employeeRepository = $employeeRepository;
    $this->employeeNotifier = $employeeNotifier;
  }

  public function sendPayments(){
        $employees = $this->employeeRepository->findAll();
        $totalPayments = 0;
        foreach($employees as $employee){
          $newEmployee = new FullTimeEmployee($employee->fullName, $employee->monthlyIncome);
          $totalPayments += $newEmployee->getMonthlyIncome();
          $this->employeeNotifier->notify($newEmployee);
        }
        return $totalPayments;
    }
}
