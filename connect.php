<?php
require_once('config.php');
$con=mysqli_connect($hostname,$username,$password);

if(!$con)die("Unable to establish connection".mysqli_error($con));





?>