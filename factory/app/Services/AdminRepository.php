<?php 
namespace App\Services;

use App\User;
use Illuminate\Http\Request;

class AdminRepository implements IUserRepository
{
    public function save(Request $array)
    {
      $user = new User();
      $user->name = $array->name;
      $user->email = $array->email;
      $user->password = bcrypt($array->password);
      $user->type = "Admin";
      $user->save();
    }
}