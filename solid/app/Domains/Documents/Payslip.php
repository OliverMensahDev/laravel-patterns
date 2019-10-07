<?php 
namespace App\Domains\Documents;

use App\Domains\Personnel\Employee;

class Payslip implements ExportableText {
    private $employeeName;
    private $monthlyIncome;
    private $month;

    public function __construct(Employee $employee, $month)
    {
      $this->employeeName = $employee->getFullName();
      $this->monthlyIncome = $employee->getMonthlyIncome();
      $this->month = $month;
    }

    public function getMonth() {
        return $this->month;
    }

    public function getMonthlyIncome() {
        return $this->monthlyIncome;
    }

    public function getEmployeeName() {
        return $this->employeeName;
    }

    public function toTxt() {
        return (
          "MONTH: " .  $this->month .
          "NAME: " . $this->employeeName.
          "INCOME: ".  $this->monthlyIncome 
        );
    }
}