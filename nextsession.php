<?php
session_start();
?>
<p> Your product are : <p>
<ul>
<li>
<?php echo 
$_SESSION['user'] ?> </li>
</ul>