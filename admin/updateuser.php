<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Customer</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i>Homepage</a>
                    </li>
                    <li>
                        <a class="active-menu" href="customer.php"><i class="fa fa-qrcode"></i>Customers</a>
                    </li>
                    <li>
                        <a href="roomdetails.php"><i class="fa fa-dashboard"></i> Room</a>
                    </li>
                    <li>
                        <a class="active-menu" href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="updateuser.php"><i class="fa fa-qrcode"></i>Update Customer</a>
                    </li>
                    <li>
                        <a class="active-menu" href="usersetting.php"><i class="fa fa-qrcode"></i>Admin Settings</a>
                    </li>
                    <li>
                        <a class="active-menu" href="message.php"><i class="fa fa-qrcode"></i>Messages</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Update Customer<small></small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
											<th>Last Name</th>
                                            <th>Email</th>
                                            <th>Passport Number</th>
											<th>Phone</th>
                                            <th>Update Customer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="select * from roombook";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
													$FNAME = $row['FName'];
													$LNAME = $row['LName'];
													$Email= $row['Email'];
													$Pnum = $row['Pnum'];
													$Phone = $row['Phone'];
                                                    if($Pnum !="Null" )
                                                    {
                                                        echo"<tr class='gradeC'>
                                                        <td>".$row['FName']."</td>
                                                        <td>".$row['LName']."</td>
                                                        <td>".$row['Email']."</td>
                                                        <td>".$row['Pnum']."</td>
                                                        <td>".$row['Phone']."</td>
                                                        <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>Update </button></td>
                                                        </tr>";
                                                    }
                                                    else
                                                    {
                                                        echo"<tr class='gradeU'>
                                                        <td>".$row['FName']."</td>
                                                        <td>".$row['LName']."</td>
                                                        <td>".$row['Email']."</td>
                                                        <td>".$row['Pnum']."</td>
                                                        <td>".$row['Phone']."</td>
                                                        <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>Update </button></td>
                                                        </tr>";
                                                    
                                                    }
										}
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    <div class="panel-body">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Update Customer Informations</h4>
                                    </div>
                                    <form method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>Change First Name</label>
                                        <input name="nfname"  class="form-control" placeholder="Enter First Name"> 
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>Change Last Name</label>
                                        <input name="nlname"  class="form-control" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>Change Email</label>
                                        <input name="nemail"  class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>Change Phone Number</label>
                                        <input name="npnum"  class="form-control" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        
                                        <input type="submit" name="up" value="Update" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
				if(isset($_POST['up']))
				{
					$nfname = $_POST['nfname'];
					$nlname = $_POST['nlname'];
                    $nemail = $_POST['nemail'];
                    $npnum = $_POST['npnum'];
					$upsql = "UPDATE `roombook` SET `Fname`='$nfname',`lname`='$nlname' ,`email`='$nemail',`phone`='$npnum' WHERE Pnum = '$Pnum'";
					if(mysqli_query($con,$upsql))
					{
					echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
					
				
					}
				}
				ob_end_flush();
				?>
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>