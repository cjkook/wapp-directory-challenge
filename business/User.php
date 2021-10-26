<?php
include_once("connection.php");
// get url parameters
$params = $_REQUEST;
// extract the action parameter
$action = $params['action'];
// $action = isset($params['action']) && $params['action'] != '' ? $params['action'] : 'list';
$empCls = new User();
// console_log($params);
switch ($action) {
    case 'list':
        $empCls->getUsers();
        break;
    case 'login':
        $empCls->login($params['username'], $params['password']);
        break;
    default:
        return;
}

class User
{
    protected $conn;
    protected $user_id;
    protected $username;
    protected $pwd;
    protected $displayName;
    protected $email;
    protected $emailChangeNotices;
    protected $roles;
    protected $userDetails;
    protected $createDateTime;
    protected $data = array();

    function __construct()
    {
        // $host = '127.0.0.1';
        // $db   = 'user_info';
        // $user = 'postgres';
        // $pass = '1437';
        // $dsn = "pgsql:host=$host;dbname=$db;";
        // $options = [
        //     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //     PDO::ATTR_EMULATE_PREPARES   => false,
        // ];

        $db = new db();
        $connString =  $db->getConnstring();
        $this->conn = $connString;
        // Begin a database session w/ PDO
        // $this->conn = new PDO($dsn, $user, $pass, $options);
    }

    // GET METHODS
    // Database query to populate the table on the page. Returns the data as a JSON object.
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $query = pg_query($this->conn, $sql) or die("error to fetch employees data");
        $data = pg_fetch_all($query);

        echo json_encode($data);
        
    }

    public function login(string $username, string $password)
    {
        $this->pwd = crypt($password, 'password');
        $sql = "SELECT username, pwd FROM users WHERE username='$username' AND pwd='$this->pwd'";
        $query = pg_query($this->conn, $sql) or die("error to fetch employees data");
        $data = pg_fetch_all($query);
        echo $data;
        echo json_encode($username . ' ' . $this->pwd);
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
