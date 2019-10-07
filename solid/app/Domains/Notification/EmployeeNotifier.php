<?php 
namespace App\Domains\Notification;

use App\Domains\Personnel\Employee;

interface EmployeeNotifier
{
  public function notify(Employee $employee);
} 