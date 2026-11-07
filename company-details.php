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
	    
	$company_name = $_REQUEST['company_name'];
	$gst_no = $_REQUEST['gst_no'];
	$tan_no = $_REQUEST['tan_no'];
	$pan_no = $_REQUEST['pan_no'];
	
	$company_address = $_REQUEST['company_address'];
	$company_city = $_REQUEST['company_city'];
	$company_zipcode = $_REQUEST['company_zipcode'];
	$company_phone = $_REQUEST['company_phone'];
	$company_fax = $_REQUEST['company_fax'];
	    
	$sql="update sidd_users set company_name='$company_name',gst_no='$gst_no',tan_no='$tan_no',pan_no='$pan_no',company_address='$company_address',company_city='$company_city',company_zipcode='$company_zipcode',company_phone='$company_phone',company_fax='$company_fax' where user_id=".$_SESSION['member_id'];
	$query1=mysql_query($sql);
	$msg="Updated  successfully!";	
	?>
	<script>window.location="company-details.php?act=editsuccess";</script>
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
    
</style>
			    
			   
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
<?php include("leftmenu.php"); ?>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        			    <?php
			    if($_REQUEST['act']=="editsuccess")
			    {
			    ?>
<div class="alert alert-success" role="alert" style="margin-top:20px;">
Company details updated successfully!. 
</div>			    
			    <?php
			    }
			    ?>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Company Info</h3>
                                

                                
                                <div class="row register-form ">
                                    <form name="update" method="post" action="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Company Name:</label>
                                            <input type="text" class="form-control" name="company_name" required value="<?=$fetch['company_name']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="text">GST No:</label>
                                            <input type="text" class="form-control" name="gst_no" required value="<?=$fetch['gst_no']?>" />
                                        </div>
                                        
                                                                                <div class="form-group">
                                                                                    <label for="email">TAN No:</label>
                                            <input type="text" class="form-control" name="tan_no" required value="<?=$fetch['tan_no']?>" />
                                        </div>
                                        
                                                                                <div class="form-group">
                                            <label for="email">PAN No:</label>
                                            <input type="text" class="form-control" name="pan_no" required  value="<?=$fetch['pan_no']?>" />
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="email">Address:</label>
                                            <input type="text" name="company_address" required class="form-control"  value="<?=$fetch['company_address']?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">City:</label>
                                            <input type="text" name="company_city" required name="company_city" class="form-control" value="<?=$fetch['company_city']?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">Zip Code:</label>
                                            <input type="text" name="company_zipcode" class="form-control" value="<?=$fetch['company_zipcode']?>" />
                                        </div>
                                        
                                                                              <div class="form-group">
                                            <label for="email">Phone Number:</label>
                                            <input type="text" name="company_phone" required class="form-control" value="<?=$fetch['company_phone']?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">Fax Number:</label>
                                            <input type="text" name="company_fax" required class="form-control" value="<?=$fetch['company_fax']?>" />
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