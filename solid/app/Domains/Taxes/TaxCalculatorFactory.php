<?php 
namespace App\Domains\Taxes;

use App\Domains\Personnel\Employee;
use App\Domains\Personnel\FullTimeEmployee;
use App\Domains\Personnel\Intern;
use App\Domains\Personnel\PartTimeEmployee;

class TaxCalculatorFactory {
    public static  function create(Employee $employee){
        if($employee instanceof FullTimeEmployee){
            return new FullTimeTaxCalculator();
        }

        if($employee instanceof PartTimeEmployee){
            return new PartTimeTaxCalculator();
        }

        if($employee instanceof Intern){
            return new InternTaxCalculator();
        }
        throw new \Exception("Invalid employee Type");
    }
}
