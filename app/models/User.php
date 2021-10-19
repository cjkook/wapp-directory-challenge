<?php

// namespace App\Models;

include("./app/connection.php");

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

    function __construct()
    {
        $db = new dbObj();
        $connString =  $db->getConnstring();
        $this->conn = $connString;
    }

    // GET METHODS
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
        $data = pg_fetch_all($queryRecords);
        return $data;
    }
    public function login(string $username, string $password)
    {
        $sql = "SELECT ";
    }
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
