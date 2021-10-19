include("connection.php");
 
$params = $_REQUEST;
$action = isset($params['action']) && $params['action'] !='' ? $params['action'] : 'list';
$empCls = new Employee();
 
switch($action) {
 case 'list':
  $empCls->getEmployees();
 break;
 default:
 return;
}
 
 
class Employee {
  protected $conn;
  protected $data = array();
  function __construct() {

	$db = new dbObj();
	$connString =  $db->getConnstring();
    $this->conn = $connString;
  }
  
  function getEmployees() {
    $sql = "SELECT * FROM employee";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	echo json_encode($data);
  }
}
?>