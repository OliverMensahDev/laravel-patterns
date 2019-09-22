<?php

namespace App\Http\Controllers;

use App\Repositories\IUserRepository;

class UserController extends Controller
{
    protected $user = null;
    
    // IUserRepository is the interface
    public function __construct(IUserRepository $user)
    {
        $this->user = $user;
    }
 
    public function showUsers()
    {
        $users = $this->user->getAllUsers();
        return response()->json($users);
    }
 
    public function getUser($id)
    {
        $user = $this->user->getUserById($id);
        return response()->json($user);
    }
 
    public function saveUser($id = null)
    {
        if($id) {
            $this->user->createOrUpdate($id);
            return response()->json("user updated");
        }
        else {
            $this->user->createOrUpdate();
            return response()->json("user created");
        }
    }
}
