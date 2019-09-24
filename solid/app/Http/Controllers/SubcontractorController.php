<?php

namespace App\Http\Controllers;

use App\Domains\Personnel\ServiceLicenseAgreement;
use App\Domains\Personnel\Subcontractor;
use App\Models\Subcontractor as AppSubcontractor;
use Illuminate\Http\Request;

class SubcontractorController extends Controller
{
    public function save(Request $request)
    {
        $minTimeOffPercent = 98;
        $maxResolutionDays = 2;
        $companySla = new ServiceLicenseAgreement($minTimeOffPercent,$maxResolutionDays);
        $contractor =  new Subcontractor($request->fullName, $request->email, $request->monthlyIncome, $request->nbHoursPerWeek);
        if($contractor->approveSLA($companySla)){
            AppSubcontractor::create($request->all());
        }
    }

    public function all()
    {
        return AppSubcontractor::all();
    }
}
