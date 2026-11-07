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
	if(isset($_REQUEST['update']))
	{
	    
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$address = $_REQUEST['address'];
	$district = $_REQUEST['district'];
	$zipcode = $_REQUEST['zipcode'];
	$community = $_REQUEST['community'];
	
	$sql="update sidd_users set name='$name',email='$email',mobile='$mobile',address='$address',district='$district', zipcode='$zipcode', community='$community' where user_id=".$_SESSION['member_id'];
	$query1=mysql_query($sql);
	$msg="Updated  successfully!";	
	?>
	<script>window.location="dashboard.php?act=editsuccess";</script>
	<?
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

.btn-group-xs>.btn, .btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
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
                                <h3 class="register-heading">Profile Info</h3>
                                
                                
                                
                                <div class="row register-form ">
                                    <form name="update" method="post" action="" enctype="multipart/form-data">
                                        
                                        
                                                                			    <?php
			    if($_REQUEST['act']=="editsuccess")
			    {
			    ?>
<div class="alert alert-success" role="alert">
  Profile information updated successfully! 
</div>			    
			    <?php
			    }
			    ?>
                                        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Name:</label>
                                            <input type="text" class="form-control" name="name" required placeholder="Name *" value="<?=$fetch['name']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" name="email" required placeholder="Email *" value="<?=$fetch['email']?>" readonly />
                                        </div>
                                        
                                                                                <div class="form-group">
                                                                                    <label for="email">Mobile:</label>
                                            <input type="text" minlength="10" maxlength="10" class="form-control" name="mobile" required placeholder="Mobile *" value="<?=$fetch['mobile']?>" />
                                            
<?php
 $sql_2="select * from user_verify where status='Verified' and user_id=".$_SESSION['member_id']; 
 $value_2=mysql_query($sql_2); 
 $count_2=mysql_num_rows($value_2);
 if($count_2==0)
 {
     $display='style="display:none"';
?>
&nbsp; &nbsp;  
<a href="verify_mobile.php"><button type="button" class="btnRegister btn-xs" style="color:#fff; width:40%; margin-top:0px;">Verify Now</button></a>
            
<button type="button" class="btnRegister btn-xs" style="margin-top:0px; width:40%; background-color:#e60f0f; color:#fff; margin-right:10px; border-color:#e60f0f">Not Verified</button>   

<?php
}
else
{
?>
<button type="button" class="btnRegister btn-xs" style="margin-top:0px; width:40%; background-color:#008c45; color:#fff; margin-right:10px; border-color:#008c45">Verified</button> 
<?
}
?>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Address:</label>
                                            <input type="text" class="form-control" name="address" placeholder="Address *" value="<?=$fetch['address']?>" />
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="email">District:</label>
                             
                             <select class="form-control" name="district" id="district" required>
   <?php
   $sql2 = "SELECT * from sidd_district";
$result2 = mysql_query($sql2);
while($row2 = mysql_fetch_array($result2)) {
   ?>
   <option <? if($fetch['district']==$row2['dis_name']) { echo 'selected'; }?> value="<?=$row2['dis_name']?>"><?=$row2['dis_name']?></option>
   <?php
}
?>
</select>
                             
                             
                                        </div>
                                        
                                                                              <div class="form-group">
                                            <label for="email">Zip Code:</label>
                                            <input type="text" name="zipcode" name="txtEmpPhone" class="form-control" placeholder="Zip Code *" value="<?=$fetch['zipcode']?>" />
                                        </div>
                                        
                                                        <div class="form-group">
                                            <label for="email">Community:</label>
       

<select class="form-control" name="community" id="community" required>
    <option <? if($fetch['community']=="SC") echo "selected"; ?> value="SC">SC</option> 
    <option <? if($fetch['community']=="ST") echo "selected"; ?> value="ST">ST</option>
    <option <? if($fetch['community']=="BC (Converted AD)") echo "selected"; ?> value="BC (Converted AD)">BC (Converted AD)</option>
    <option <? if($fetch['community']=="Others") echo "selected"; ?> value="Others">Others</option>
</select>
       
                                        </div>

                                        <input type="submit" name="update" class="btnRegister"  value="Update"/>
                                    </div>
                                    
       
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
			    



				
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