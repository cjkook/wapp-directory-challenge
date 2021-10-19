<?php
include("./app/connection.php");
$params = $_REQUEST;
$action = isset($params['action']) && $params['action'] != '' ? $params['action'] : 'list';
$empCls = new User();

switch ($action) {
  case 'list':
    $empCls->getEmployees();
    break;
  default:
    return;
}

class User
{
  protected $conn;
  protected $data = array();


  function __construct()
  {
    $db = new db();
    $connString =  $db->getConnstring();
    $this->conn = $connString;
  }

  public function getEmployees()
  {
    $sql = "SELECT * FROM users";
    $queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
    $data = pg_fetch_all($queryRecords);
    echo json_encode($data);
  }
}
