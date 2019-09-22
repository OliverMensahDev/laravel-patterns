<?php 
namespace App\Services;

use Illuminate\Http\Request;

class UserRepositoryFactory
{
  public static function create($userType)
  {
    if(strtolower($userType) =='admin'){
      return new AdminRepository;
    }else{
      return new UserRepository;
    }
  }

 

}