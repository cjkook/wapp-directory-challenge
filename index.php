<?php
// Load Config
require_once './config/config.php';

require_once './vendor/autoload.php';

$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
// require $root.'/MinerMeisterWeb/User/business/loginTestHeader.php';
require_once $root . '/wapp-directory-challenge/User/data_access/crypt.php';
require_once $root . '/wapp-directory-challenge/User/data_access/login.php';
require_once $root . '/wapp-directory-challenge/view/pageStart.php';

// require("./app/models/User.php");

print $pageStart;
print $pageEnd;
