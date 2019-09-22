<?php

namespace App\Http\Controllers;

use App\Services\UserRepositoryFactory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function save(Request $request)
    {
        $user = UserRepositoryFactory::create($request->type);
        $user->save($request);
    }
}
