<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$Fname = $_POST['Fname'];
$lname = $_POST['lname'];
$Gender = $_POST['Gender'];
$address = $_POST['address'];


echo "you have been registered successfully";
echo "I welcome you Ms. $Fname $lname </br>
your address is $address";
?>
</body>
</html>