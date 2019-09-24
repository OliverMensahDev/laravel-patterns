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
        try{
            $employee = EmployeeFactory::create($request);
            $this->iEmployeeRepository->save($employee);
        }catch(\Exception $ex){
            return $ex->getMessage();
        }

    }

    public function allEmployees()
    {
        return $this->iEmployeeRepository->findAll();
    }
}
