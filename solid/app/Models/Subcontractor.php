<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcontractor extends Model
{
  protected $fillable = [
    'email',
    'fullName',
    'monthlyIncome',
    'nbHoursPerWeek'
  ];
}