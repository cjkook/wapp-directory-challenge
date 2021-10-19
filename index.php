<?php
// Load Config
require_once './config/config.php';

require_once './vendor/autoload.php';

$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
// require $root.'/MinerMeisterWeb/User/business/loginTestHeader.php';
require_once $root . '/wapp-directory-challenge/User/data_access/crypt.php';
require_once $root . '/wapp-directory-challenge/User/data_access/login.php';
require_once $root . '/wapp-directory-challenge/components/loginCard.php';
require_once $root . '/wapp-directory-challenge/view/pageStart.php';
require_once $root . '/wapp-directory-challenge/view/directory.php';

require("./app/models/User.php");
$user = new User();
// $emps = $user->getUsers();
// print_r($emps);
// foreach ($emps as $emp) {
//   print $emp['username'];
// }
print $pageStart;
print $directory;
print $pageEnd;
