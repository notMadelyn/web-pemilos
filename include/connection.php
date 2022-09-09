<?php
defined('BASEPATH') or die("No access direct allowed");

$host = 'localhost';
$user = 'madelyn';
$pass = '1';
$db   = 'voten';

// Create connection
$con = new mysqli($host, $user, $pass, $db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>
