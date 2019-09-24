<?php 

namespace App\Services;

use App\Domains\Personnel\Employee;
use App\Models\EmployeeModel;

class EmployeeRepository implements IEmployeeRepository
{
  public function save(Employee $employee)
  {
    $model = new EmployeeModel();
    $model->fullName = $employee->getFullName();
    $model->monthlyIncome  = $employee->getMonthlyIncome();
    $model->email = $employee->getEMail();
    $model->nbHoursPerWeek = $employee->getNbHoursPerWeek();
    $model->save();
  } 

  public function findAll()
  {
    return EmployeeModel::all();
  }

}