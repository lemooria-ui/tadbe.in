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
	    
	        if($_FILES['document1']['name'] != "")
			{
			$document1=$_FILES['document1']['name']; 
			$source = $_FILES['document1']['tmp_name'];
			$originalpath = "webupload/original/".$document1;
			move_uploaded_file($source,$originalpath);
			}
			else { $document1=$_REQUEST['theValue1']; }
			
			if($_FILES['document2']['name'] != "")
			{
			$document2=$_FILES['document2']['name']; 
			$source = $_FILES['document2']['tmp_name'];
			$originalpath = "webupload/original/".$document2;
			move_uploaded_file($source,$originalpath);
			}
			else { $document2=$_REQUEST['theValue2']; }
			
			if($_FILES['document3']['name'] != "")
			{
			$document3=$_FILES['document3']['name']; 
			$source = $_FILES['document3']['tmp_name'];
			$originalpath = "webupload/original/".$document3;
			move_uploaded_file($source,$originalpath);
			}
			else { $document3=$_REQUEST['theValue3']; }
			
			if($_FILES['document4']['name'] != "")
			{
			$document4=$_FILES['document4']['name']; 
			$source = $_FILES['document4']['tmp_name'];
			$originalpath = "webupload/original/".$document4;
			move_uploaded_file($source,$originalpath);
			}
			else { $document4=$_REQUEST['theValue4']; }
	
	    
	$sql="update sidd_users set document1='$document1',document2='$document2',document3='$document3',document4='$document4' where user_id=".$_SESSION['member_id'];
	$query1=mysql_query($sql);
	$msg="Updated  successfully!";	
	?>
	<script>window.location="documents.php?act=editsuccess";</script>
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
                                <h3 class="register-heading">Documents</h3>
                                <div class="row register-form ">
                                    <form name="update" method="post" action="" enctype="multipart/form-data">
                                    <div class="col-md-6">
           
                                        <div class="form-group">
                                                                                    <label for="email">Community Certificate :</label>
                                            <input type="file" class="form-control" name="document1" />
                                            
                                                                                     <input type="hidden" value="<?=$fetch['document1']?>" id="theValue1" name="theValue1" />
<? if($fetch['document1']!=''){ ?>
<a href="webupload/original/<?php echo $fetch['document1']; ?>" target="blank">
    <?php echo $fetch['document1']; ?></a>
<? } ?>

                                        </div>

                                    </div>
                                    
                                                                        <div class="col-md-6">
           
                                        <div class="form-group">
                                                                                    <label for="email">Udyog Aadhar Memorandum:</label>
                                            <input type="file" class="form-control" name="document2" />
                                     <input type="hidden" value="<?=$fetch['document2']?>" id="theValue2" name="theValue2" />
                                     
<? if($fetch['document2']!=''){ ?>
<a href="webupload/original/<?php echo $fetch['document2']; ?>" target="blank">
    <?php echo $fetch['document2']; ?></a>
<? } ?>
                                     
                                     
                                        </div>

                                    </div>
                                    
                                    
                                                                         <div class="col-md-6">
           
                                        <div class="form-group">
                                                                                    <label for="email">Company Registration Certificate:</label>
                                            <input type="file" class="form-control" name="document3" />
                                            
                                           <input type="hidden" value="<?=$fetch['document3']?>" id="theValue3" name="theValue3" />
                                           
<? if($fetch['document3']!=''){ ?>
<a href="webupload/original/<?php echo $fetch['document3']; ?>" target="blank">
    <?php echo $fetch['document3']; ?></a>
<? } ?>
    
                                        </div>

                                    </div>
                                    
                                                                                                            <div class="col-md-6">
           
                                        <div class="form-group">
                                                                                    <label for="email">Brochure or Company Profile :</label>
                                            <input type="file" class="form-control" name="document4" />
                                <input type="hidden" value="<?=$fetch['document4']?>" id="theValue4" name="theValue4" />
    
<? if($fetch['document4']!=''){ ?>
<a href="webupload/original/<?php echo $fetch['document4']; ?>" target="blank">
    <?php echo $fetch['document4']; ?></a>
<? } ?>                                         
                                            
                                        </div>

                                    </div>
                                    
                                    
                                    <div class="col-md-6">

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