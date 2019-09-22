<?php 
namespace App\Services;

use Illuminate\Http\Request;

interface IUserRepository
{
    public function save(Request $array);
}