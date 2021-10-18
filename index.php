<?php
$root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
// require $root.'/MinerMeisterWeb/User/business/loginTestHeader.php';
require_once $root.'/wapp-directory-challenge/User/data_access/crypt.php';
require_once $root.'/wapp-directory-challenge/User/data_access/login.php';
require_once $root.'/wapp-directory-challenge/view/loginPage.php';
require_once $root.'/wapp-directory-challenge/view/navbar.php';

// $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$lg = new login();


$pageStart = '<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY WEBSITE PAGE</title>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="view/styles/custom.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    // $("#date").datepicker();
});
</script>
</head>'
.$navbar
.$loginPage
.'</html>';

print $pageStart;
echo $lg->seedData();


// echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
// echo 'test';
