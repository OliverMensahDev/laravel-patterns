<?php

namespace App\Http\Controllers;

use App\Services\EmployeeFactory;
use App\Services\IEmployeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public $iEmployeeRepository;

    public function __construct(IEmployeeRepository $iEmployeeRepository)
    {
        $this->iEmployeeRepository = $iEmployeeRepository;
    }

    public function saveEmployee(Request $request)
    {
        try {
            $data = (object) [
                "fullName" => $request->fullName,
                "monthlyIncome" => $request->monthlyIncome,
                "email"   => $request->email,
                "nbHoursPerWeek" => $request->nbHoursPerWeek,
                "type" => $request->type
            ];
            $employee = EmployeeFactory::create($data);
            $this->iEmployeeRepository->save($employee);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function allEmployees()
    {
        return $this->iEmployeeRepository->findAll();
    }
}
