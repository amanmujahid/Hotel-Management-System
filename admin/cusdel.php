<?php
include ('db.php');

			
			$Pnum =$_GET['eid'];		
			$newsql ="DELETE FROM `roombook` WHERE Pnum ='$Pnum' ";
			$newsql2 ="DELETE FROM `room` WHERE pnum ='$Pnum' ";
			if(mysqli_query($con,$newsql) && mysqli_query($con,$newsql2))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Customer Deleted") </script>';	
				}
			header("Location: customer.php");	
?>