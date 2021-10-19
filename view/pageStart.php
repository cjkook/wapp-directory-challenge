<?php
require_once $root.'/wapp-directory-challenge/components/navbar.php';
require_once $root.'/wapp-directory-challenge/components/loginCard.php';
$pageStart = '<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Miner Directory</title>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<script type="text/javascript" src="view/common.js"></script>
</head>
<body>'.$navbar.'<div class="container">';

$pageStart .= $loginCard;

$pageEnd = '</div></body></html>';

