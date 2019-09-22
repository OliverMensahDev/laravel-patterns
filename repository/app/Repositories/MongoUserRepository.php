<?php
namespace App\Repositories;

class MongoUserRepository implements IUserRepository {
    
  public function getAllUsers()
  {
      // get and return all user mongodb
      return "users from mongo";
  }

  public function getUserById($id)
  {
    return "user from mongo";
  }

  public function createOrUpdate($id = null)
  {
    return "save user in mongo";
  }

}