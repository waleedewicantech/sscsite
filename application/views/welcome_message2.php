<?php
$this->load->helper('html');
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <?php 
    $link = array(
        'href'  => 'css/style.css',
        'rel'   => 'stylesheet',
        'type'  => 'text/css',
        'media' => 'print'
    );

    ?>
	<link href="http://localhost/sunstarcars/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
</div>

</body>
</html>