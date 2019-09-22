<?php 
namespace App\Services;

use App\User;
use Illuminate\Http\Request;

class UserRepository implements IUserRepository
{
    public function save(Request $array)
     {
       $user = new User();
       $user->name = $array->name;
       $user->email = $array->email;
       $user->password = bcrypt($array->password);
       $user->type = "user";
       $user->save();
     }
}