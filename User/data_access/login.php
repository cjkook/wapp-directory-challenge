<?php

/**
 *     Methods to handle login authentication, authorization, and maintenance.
 *
 * @author Thomas K. Carpenter
 */
class login
{
  private $conn;
  private $log;

  function __Construct()
  {
    global $log;
    $this->log = $log;

    //Begin a database session:
    $this->conn = new PDO('pgsql:host=localhost;dbname=user_info', 'postgres', '1437');

    // connect w/o PDO
    // $this->conn = pg_connect("host=localhost dbname=user_info user=postgres password=1437");
  }


  public function seedData()
  {
    $query = 'SELECT * FROM users';
    $results = pg_query($query);

    return $results;
  }


  /**   Fetches an array of info from the "User" table, to establish login authentication.
   * Upon success, an associative array is returned of "id", "email", "displayName",
   * "emailChangeNotices", and "roles" values. Otherwise, an empty array is returned,
   * and an error message logged.
   *
   * @return (Associative array) See above.
   */
  // public function fetchUserInfo($username, $password)
  // {
  //   $aryReturnValue = array();

  //   $results = $this->conn->query('SELECT "id","email","displayName","emailChangeNotices","roles" FROM "User" ' .
  //     'WHERE "username" = \'' . $username . '\' AND "password" = crypt(\'' . $password . '\',"password")');

  //   if ($results->rowCount() > 0) {
  //     foreach ($results as $row) {
  //       $newRow = array();
  //       $newRow["id"] = $row["id"];
  //       $newRow["email"] = $row["email"];
  //       $newRow["displayName"] = $row["displayName"];
  //       $newRow["emailChangeNotices"] = $row["emailChangeNotices"];
  //       $newRow["roles"] = $row["roles"];
  //       $aryReturnValue[] = $newRow;
  //     }
  //   }
  //   if (empty($aryReturnValue)) {
  //     $this->log->warning('(' . rand() . ') Failed attempt to login user, ' . $username . ', with password, ' . $password . '.');
  //   }
  //   return $aryReturnValue;
  // }
}
