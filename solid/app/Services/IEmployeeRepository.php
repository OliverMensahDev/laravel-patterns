<?php 

namespace App\Services;

use App\Domains\Personnel\Employee;

interface IEmployeeRepository
{
  public function save(Employee $employee);  
  public function findAll();  
}