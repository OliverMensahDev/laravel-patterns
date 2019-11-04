<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
  protected $fillable = [
    'email',
    'fullName',
    'monthlyIncome',
    'nbHoursPerWeek',
    "type"
  ];

  public function setFirstNameAttribute($value)
  {
      $this->attributes['type'] = strtolower($value);
  }
}

