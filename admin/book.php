<?php
include ('db.php');
	$ID =$_GET['eid'];
	$newsql =" UPDATE roomrate SET status ='Booked' WHERE ID = '$ID' ";
	if(mysqli_query($con,$newsql))
		{
		echo' <script language="javascript" type="text/javascript"> alert("Customer Deleted") </script>';	
		}
	header("Location: roomdetails.php");	
?>