<?php 
namespace App\Models;

class User
{
    protected $user_id;
    protected $username;
    protected $password;
    protected $displayName;
    protected $email;
    protected $emailChangeNotices;
    protected $roles;
    protected $userDetails;
    protected $createDateTime;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->username;
    }

    public function getRoles()
    {
      return $this->roles;
    }

    // SET METHODS
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}