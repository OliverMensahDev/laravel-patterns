<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("employees/save", 'EmployeeController@saveEmployee');
Route::get("employees/all", "EmployeeController@allEmployees");
Route::get("employees/taxes", "TaxController@getTaxes");
Route::post("contractors/save", "SubcontractorController@save");
Route::get("contractors/all", "SubcontractorController@all");
Route::post("employees/request-time-off", 'NatHolidayEmployeeTimeOffController@requestTimeOff');
Route::get("employees/request-payslip", 'ExportPayslipController@requestPayslip');
Route::post("employees/send-payment", 'PaymentProcessorController@sendPayments');