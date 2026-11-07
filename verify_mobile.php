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
?>

<?php
$user_id = $_SESSION['member_id']; 
if(isset($_REQUEST['code'])&& $_REQUEST['code']!='')
{
 $code=$_REQUEST['code'];

 $sql="select * from user_verify where user_id='$user_id' and code='$code'"; 
 $value=mysql_query($sql); 
 $count=mysql_num_rows($value); 
 $fetch=mysql_fetch_array($value);
 if($count>0)
 {
$sql_i = "update user_verify set status='Verified' where user_id=".$user_id;
mysql_query($sql_i);
 echo "<script> window.location.href='verify_mobile.php?action=success'; </script>";
 }
 else
 {
 echo "<script> window.location.href='verify_mobile.php?action=invalid'; </script>";
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
<span>Welcome <?=$_SESSION['user_name']?></span>
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

.blinking{
	animation:blinkingText 0.8s infinite;
	font-weight:bold;
	padding-right:20px;
	text-align:center;
	margin-top:-20px;
	padding-bottom:20px;
}
@keyframes blinkingText{
	0%{		color: #ff0000;	}
	49%{	color: transparent;	}
	50%{	color: transparent;	}
	99%{	color:transparent;	}
	100%{	color: #000;	}
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
                                <h3 class="register-heading">Verify Mobile Number</h3>
                                <div class="row register-form ">
                                    
							<?php
							if($_REQUEST['action']=="success")
							{
							?>
							
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> Mobile number verified successfully.
								</div>
							<?
							}
                            ?>	

							<?php
							if($_REQUEST['action']=="invalid")
							{
							?>
							
                            <div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Error!</strong> Invalid code.
						    </div>
							
							<?
							}
                            ?>	
                            
                            

 								<form class="form-horizontal row-border" id="validate-1" method="post" enctype="multipart/form-data" action="" autocomplete="off" <?=$display?>>
							
                                    
									<div class="form-group" style="margin-bottom:0px">
										<label class="col-md-4 control-label">Verification Code :</label>
										<div class="col-md-5"><input type="text" name="code" id="code" value=""  class="form-control" required></div>
										<div class="col-md-2">
										                                            <input type="submit" name="update" class="btn btn-lg btn-primary" onClick="return validate();" value="Verify" style="color:#fff">
										</div>
									</div>
									
									<input type="hidden" name="user_id" value="<?=$content[0]['id']?>">

									
                                             


<?php
 $sql_2="select * from user_verify where user_id=".$_SESSION['member_id']; 
 $value_2=mysql_query($sql_2); 
 $count_2=mysql_num_rows($value_2);
 if($count_2==0)
 {
?>
                                    <div class="form-group">
                                        
                                        <label class="col-md-4 control-label">&nbsp;</label>
				
										<div class="col-md-8" style="text-align:left;">


										<a href="send-code.php"><input type="button" class="btn btn-lg btn-danger" value="Send Verification Code" style="color:#fff"></a>
										           </div>
									</div>
										
<?php
}
else
{
?>
<button type="button" class="btnRegister btn-xs" style="margin-top:20px; width:80%; background-color:#008c45; color:#fff; margin-right:10px; border-color:#008c45">Verification Code Sent to Your registered Mobile Number</button> 
<?php
}
?>

										    

										
                             
                         

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