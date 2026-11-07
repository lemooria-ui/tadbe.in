<?php 
session_start();
error_reporting(0);
include('webadmin/include/config.php');

 $sql="select * from sidd_users where user_id=".$_SESSION['member_id']; 
 $value=mysql_query($sql); 
 $count=mysql_num_rows($value); 
 $fetch=mysql_fetch_array($value);

if($_SESSION['member_id']=="")
{
?>
<script>window.location="index.php";</script>
<?
}


if(isset($_REQUEST['submit']))
{
$event_id = $_REQUEST['event_id'];
$user_id = $_SESSION['member_id'];

$sql = "select * from sidd_event_member where user_id='$user_id' and event_id='$event_id'";
$val = mysql_query($sql);
$num = mysql_num_rows($val);
if($num==0)
{
$sql2 = "INSERT INTO `sidd_event_member` (`user_id`, `event_id`) VALUES ('$user_id', '$event_id');";
mysql_query($sql2);
?>
<script>
    window.location.href="events.php?action=success";
</script>  
<?
}
else
{
?>
<script>
    window.location.href="events.php?action=error";
</script>
<?
}
}


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
<span>Welcome <?=$_SESSION['member_name']?></span>
							<span class="before-bottom"></span>
						</h1>
					</div>
			
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-breadcrumb -->
		

		<div class="gb-contact-form gb-section">
			<div class="container">
			    

			    
<style>
    
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 2%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 5%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 2%;
    margin-bottom: -15%;
    color: #495057;
}

.gb-section, .bg-page-content {
    padding: 20px 20px !important;
    padding-top:0px !important;
}
    
</style>
			    
			   
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
<?php include("leftmenu.php"); ?>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Events
                                <div style="float:right; display:none"><button type="button" class="btn btn-primary btn-sm" style="padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px; color:#fff">Join New Event</button></div></h3>
                                <div class="row register-form " style="padding:3%; padding-top:7%">
                                    


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Event Date</th>
        <th>Event Title</th>
        <th>Venue</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
        
<?php
$i=1;
$sql = "select m.*,e.event_date,e.web_title,e.venue,e.time_from,e.time_to from sidd_event_member AS m 
INNER JOIN sidd_events AS e ON e.id=m.event_id 
where user_id=".$_SESSION['member_id'];
$val = mysql_query($sql);
while($fetch=mysql_fetch_array($val))
{
?>
        
        
      <tr>
        <td><?=$i?></td>
        <td><?=$fetch['event_date']?></td>
        <td><?=$fetch['web_title']?></td>
        <td><?=$fetch['venue']?></td>
        <td><?=$fetch['time_from']?> - <?=$fetch['time_to']?></td>
      </tr>
      
<?
$i++;
}
?>

    </tbody>
  </table>	
  
  

 <?php
include("config.php");
?> 
  
  						<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="" autocomplete="off">
  						    
  						    <h3 align="center" style="margin-bottom:20px;">Join New Event</h3>
  						    
  						    
  			    <?php
			    if($_REQUEST['action']=="success")
			    {
			    ?>
<div class="alert alert-success" role="alert">
 You have joined new program successfully!
</div>			    
			    <?php
			    }
			    ?>
			    
			    <?php
			    if($_REQUEST['action']=="error")
			    {
			    ?>
<div class="alert alert-danger" role="alert">
 Already you had joined!.
</div>			    
			    <?php
			    }
			    ?>
							
                                    
									<div class="form-group">
										<label class="col-md-2 control-label">Events :</label>
										<div class="col-md-10">
										    

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
					
									
	                                    <div class="form-group">
									<label class="col-md-2 control-label">&nbsp;</label>
										<div class="col-md-8" style="text-align:left;">
                                        <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Join">
										
                                        </div>
									</div>
                         

									</form>
  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
			    

	<script type="text/javascript">
function validate()
{
	oldpassword=document.getElementById('oldpassword').value;
	if(oldpassword=="")
	{
	alert('Enter old password');
	document.getElementById('oldpassword').focus();
	return false;
	}

	newpassword=document.getElementById('newpassword').value;
	if(newpassword=="")
	{
	alert('Enter new password');
	document.getElementById('newpassword').focus();
	return false;
	}

	confirmpassword=document.getElementById('confirmpassword').value;
	if(confirmpassword=="")
	{
	alert('Enter confirm password');
	document.getElementById('confirmpassword').focus();
	return false;
	}
	
			if(newpassword!='' && confirmpassword!='')
		{
			if(newpassword!=confirmpassword)
			{
				alert("New password and confirm password should be same\n");
				document.getElementById('confirmpassword').focus();
				return false;
			}
		}
	
}
</script>

				
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