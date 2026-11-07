<?php
$servername = "localhost";
$username = "tadbein_database";
$password = "tadbein_database";
$dbname = "tadbein_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_REQUEST['submit']))
{
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $address = $_REQUEST['address'];
    $district = $_REQUEST['district'];
    $community = $_REQUEST['community'];
    $event_id = $_REQUEST['event_id'];
    $password = rand();
    
    $sql2 = "select * from sidd_users where email='".$_REQUEST['email']."'";
    $result2 = $conn->query($sql2);
    
    $sql3 = "select * from sidd_users where mobile='".$_REQUEST['mobile']."'";
    $result3 = $conn->query($sql3);
    
    if ($result2->num_rows > 0)
	{  
	?>
	<script>window.location="delegates.php?action=failed";</script>
	<?
	}
	
	if ($result3->num_rows > 0)
	{  
	?>
	<script>window.location="delegates.php?action=error";</script>
	<?
	}
	
$reg_date = date("d-m-Y");


    if ($result2->num_rows == 0 && $result3->num_rows == 0)
	{
$sql = "INSERT INTO `sidd_users` (`user_type`, `name`, `email`, `mobile`, `address`, `district`, `community`,password,event_id,reg_date) VALUES ('Delegates', '$name', '$email', '$mobile', '$address', '$district', '$community','$password','$event_id','$reg_date');";
$result = $conn->query($sql);

$reg_id = mysqli_insert_id($conn); 

$sql2 = "INSERT INTO `sidd_event_member` (`user_id`, `event_id`) VALUES ('$reg_id', '$event_id');";
$result2 = $conn->query($sql2);


// mail start

############################### user login ##########################################

$to = $email;

if($to) {

$html  = "<table width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#f6f5f1' align='center'>
<tbody>
<tr>
<td align='center'>
<table width='668' cellspacing='0' cellpadding='0' border='0' bgcolor='#f6f5f1' align='center'>
<tbody>
<tr>
<td width='650' bgcolor='#ffffff' align='left'>
<table width='668' cellspacing='0' cellpadding='0' border='0'>
<tbody>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td width='668' align='center' ></td>
</tr>
</tbody>
</table>

<table width='570' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center' style='font-size:13px; color:#852927; font-family:calibri; '>
<tbody>
<tr>
    <td height='10' colspan='3' align='left'><b>Login Details</b></td>
    </tr>

<tr>
    <td height='10' colspan='3'></td>
    </tr>

<tr>
    <td  colspan='3'><hr></td>
    </tr>

    <tr>
    <td height='10' colspan='3'></td>
    </tr>

<tr>
    <td colspan='3'>Hi&nbsp;".$name.",</td>
    </tr>
   
   
<tr>
    <td height='15' colspan='3'></td>
    </tr>

<tr>
    <td colspan='3'>

Thanks for registering.
</td>
    </tr>


<tr>
    <td height='15' colspan='3'></td>
    </tr>

 
    <tr>
    <td  colspan='3'><b>Please find below your account login Info :</b></td>
    </tr>
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
   
    <tr>
    <td align='left' width='100'>Email Id</td>
    <td width='20'>:</td>
    <td align='left'>".$email."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
   
    <tr>
    <td align='left'>Password</td>
     <td>:</td>
    <td align='left'>".$password."</td>
    </tr>

   <tr>
    <td height='10' colspan='3'></td>
    </tr>
   
<tr>
    <td colspan='3'><hr></td>
    </tr>

   <tr>
    <td height='10' colspan='3'></td>
    </tr>

<tr>
<td>
<p><b>TADBE</b><br>
Enquiry Us : enquiry@tadbe.in <br>
Visit Us : http://www.tadbe.in 
</p>
</td>
</tr>

<tr>
    <td colspan='3'><hr></td>
    </tr>

   <tr>
    <td height='10' colspan='3'></td>
    </tr>

   
</tbody>
</table>


</td>
</tr>
</tbody>
</table>

</td>
</tr>
</tbody>
</table>";

$from="info@tadbe.in";  
$subject = "Event - Login Details";

    $message = "<html><body>".$msg."</body></html>";
 
   //$headers = 'From: '.$_POST['email'].'\r\n'.'X-Mailer: PHP/' . phpversion();
$headers  = "From: ".strip_tags($from)." \r\n";
$headers .= "Reply-To: ".strip_tags($from). "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$html = utf8_decode($html);
$ok = mail($to,$subject,$html,$headers);
}

############################### end user login ##########################################

// mail end


    }
    
    
    	else
		{
		?>
		<script>window.location="delegates.php?action=failed";</script>
    	<?php
		}
?>
<script>
    window.location.href="delegates.php?action=success";
</script>
<?

}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.gridbootstrap.com/eventup/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 13:21:51 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include("include/script.php"); ?>


<style>
    
    textarea.form-control {
    height: 120px !important; 
    padding: 20px 30px;
    resize: none;
}
    
    
</style>


<style>

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 0px;
  text-align: center;
  margin-bottom:20px;
}

#London {background-color:#ccc;}
#Paris {background-color:green;}
#Tokyo {background-color:blue;}
#Oslo {background-color:orange;}
</style>

</head>
 	<body>
<?php include("include/header.php"); ?>

		<div class="gb-breadcrumb gb-bg white-color">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="page-title title-white">
						<h1>
							<span class="before-top"></span>
							<span>Delegates Registeration</span>
							<span class="before-bottom"></span>
						</h1>
					</div>
			
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-breadcrumb -->
		

		
		<div class="gb-contact-form gb-section">
			<div class="container">
			    
			    <?php
			    if($_REQUEST['action']=="success")
			    {
			    ?>
<div class="alert alert-success" role="alert">
  Your information has been sent to successfully!. Organizer will contact you soon. 
</div>			    
			    <?php
			    }
			    ?>
			    
			    
			    
			    			    <?php
			    if($_REQUEST['action']=="failed")
			    {
			    ?>
<div class="alert alert-danger" role="alert">
Already user available with this email address. Please try with different one.
</div>			    
			    <?php
			    }
			    ?>
			    
			    			    <?php
			    if($_REQUEST['action']=="error")
			    {
			    ?>
<div class="alert alert-danger" role="alert">
Already user available with this mobile number. Please try with different one.
</div>			    
			    <?php
			    }
			    ?>
			    

<form name="register" method="post" action="#">
					<div class="row"> 
					
						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"  required>
    </div>
			            </div>
 			            
 						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"  required>
    </div>
			            </div>
			            
 						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Mobile:</label>
      <input type="tel" minlength="10" maxlength="10" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
    </div>
			            </div>
			            
			            			             						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
    </div>
			            </div>
			            


			            
<?php
include("config.php");
?>
			            
			             						<div class="col-md-4">
    <div class="form-group">
      <label for="email">District:</label>

<select class="form-control" name="district" id="district" required>
   <option value="">Distrit</option> 
   <?php
   $sql2 = "SELECT * from sidd_district";
$result2 = $conn->query($sql2);
while($row2 = $result2->fetch_assoc()) {
   ?>
   <option value="<?=$row2['dis_name']?>"><?=$row2['dis_name']?></option>
   <?php
}
?>
</select>

    </div>
			            </div>
			            
			             						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Community:</label>

<select class="form-control" name="community" id="community" required>
   <option value="">Community</option> 
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    <option value="BC (Converted AD)">BC (Converted AD)</option>
</select>


    </div>
			            </div>
			            
<?php
include("config.php");
?>
			            
			            
			            			             						<div class="col-md-4">
    <div class="form-group">
      <label for="email">Select Program:</label>

<select class="form-control" name="event_id" id="event_id" required>
   <option value="">Select Program</option>
   
 					    <?php
					    $i=1;
$sql = "SELECT * from sidd_events";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
					    ?>	
   
   
    <option value="<?=$row['id']?>"><?=$row['event_date']?>-<?=$row['web_title']?>-<?=$row['time_from']?>-<?=$row['time_to']?></option>

<?php
}
?>

</select>


    </div>
			            </div>
			            




		</div>
		
	    <div class="row"> 
						<div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>

 
 			</div>
		</div>
		
		
 </form>

				
			</div><!-- /.container -->
		</div><!-- /.gb-contact-form -->
	


<?php include("include/footer.php"); ?>

		<!-- JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/countdown.js"></script>
		<script src="js/slick.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/magnific-popup.min.js"></script>
		<script src="js/main.js"></script>   
	</body>

<!-- Mirrored from html.gridbootstrap.com/eventup/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 13:22:03 GMT -->
</html>	