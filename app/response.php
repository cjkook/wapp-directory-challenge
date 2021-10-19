<?php
include("connection.php");

class User
{
  protected $conn;
  protected $data = array();


  function __construct()
  {
    $db = new dbObj();
    $connString =  $db->getConnstring();
    $this->conn = $connString;
  }
  
  public function getEmployees()
  {
    $sql = "SELECT * FROM users";
    $queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
    $data = pg_fetch_all($queryRecords);
    return $data;
  }
}
