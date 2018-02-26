<?php
require_once('selectdb.php');

$query = "select * from state";
$result = mysqli_query($con, $query);
if(!$result)die("unable to fetch record".mysqli_error($con));
if($result)
{
	while($info=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
		$STATECODE= $info['state_code'];
		$STATENAME= $info['state_name'];
		$DISTRICTCODE= $info['district_code'];
		$DISTRICTNAME= $info['district_name'];
		?>
	<table width="80%" border="1" cellpadding="5" cellspacing="5" >	
    <tr>
    <td> <?php echo $STATECODE ?> </td>
    <td> <?php echo $STATENAME ?> </td>
    <td> <?php echo $DISTRICTCODE ?> </td>
    <td> <?php echo $DISTRICTNAME ?> </td>
   </tr>
   
  </table>
    <?php
	
		
		
	}
}


?>