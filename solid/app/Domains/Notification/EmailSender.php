<?php 
namespace App\Domains\Notification;

use App\Domains\Personnel\Employee;

class EmailSender implements EmployeeNotifier
{
  public function notify(Employee $employee)
  {
    $email = $employee->getEmail();
    print("Email sent to $email");
  }
} 