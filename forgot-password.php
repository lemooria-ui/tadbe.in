<?php
ob_start();
session_start();
error_reporting(0);
include('webadmin/include/config.php');

if(isset($_REQUEST['forgot']))
{
	$username = $_REQUEST['email'];
    $selectsql="select * from sidd_users where (email='$username' or mobile='$username')";  
	$res=mysql_query($selectsql);
	$reset=mysql_fetch_array($res);
	$usercnt=mysql_num_rows($res);
	if($usercnt>0)
	{
		$pass = $reset['password'];
		$email = $reset['email'];
		$name = $reset['name'];
		$mobile = $reset['mobile'];
		$USER_SITE_URL = 'http://siddwebdesign.com/event';
		
		
//SMS START

// Textlocal account details
$username = urlencode('trlemooria');
$password = urlencode('702405');

// Message details
$phone = $mobile;
$numbers = urlencode($phone);
$sender = urlencode('TADBEA');
$message = urlencode('Your password is: '.$pass.'. To Enquiry : +91 9677092443, To Email : enquiry@tadbe.in, Visit Our Site : http://www.tadbe.in  ');

$data = 'username=' . $username . '&password=' . $password . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
$ch = curl_init('http://sms99.co.in/pushsms.php?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
//SMS END
	
		
		$to = $email;
		$subject = "TADBE - Account Information";
		$mail_body =  "
              <table width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#f6f5f1' align='center'>
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
    <td height='10' colspan='3' align='left'><b>TADBE - Account Information</b></td>
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
    <td colspan='3'>Hi&nbsp;".$name."</td>
    </tr>
    	
	<tr>
    <td height='15' colspan='3'></td>
    </tr>
        	
	<tr>
    <td colspan='3' style='line-height:27px'>You received this e-mail because you requested your login information for our website. <br>
	Please find below login details.</td>
    </tr>
    
	<tr>
    <td height='15' colspan='3'></td>
    </tr>
   
    <tr>
    <td align='left' width='100'>Email Id </td>
    <td width='20'>:</td>
    <td align='left'>".$email."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
	
	<tr>
    <td align='left' width='100'> Password </td>
    <td width='20'>:</td>
    <td align='left'>".$pass."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
    <tr>
    <td align='left'>URL</td>
     <td>:</td>
    <td align='left'>http://tadbe.in/login.php</a></td>
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
            $subject = "TADBE - Account Details";
            //$reply="do-not-replay@squbetech.in";	
 
	    //$headers = 'From: '.$_POST['email'].'\r\n'.'X-Mailer: PHP/' . phpversion();
		$headers  = "From: ".strip_tags($from)."\r\n";
		$headers .= "Reply-To: ".strip_tags($from). "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	

	    $html = utf8_decode($mail_body);
        mail($to, $subject, $html, $headers);


		?>
		<script>window.location='forgot-password.php?act=succ';</script>
		<?php
		}
		else
		{
		?>
		<script>window.location='forgot-password.php?act=err';</script>
		<?php
		}
		}
		?>


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
							<span>Forgot Password</span>
							<span class="before-bottom"></span>
						</h1>
					</div>
			
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-breadcrumb -->
		
<style>
    
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #2e3192;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
    
</style>

		
		<div class="gb-contact-form gb-section">
			<div class="container">
			    
			    <?php
			    if($_REQUEST['act']=="succ")
			    {
			    ?>
<div class="alert alert-success" role="alert">
  Password has been sent to your registered email or mobile number.
</div>			    
			    <?php
			    }
			    ?>
			    

    <div class="row">
         <div class="col-sm-9 col-md-7 col-lg-3 mx-auto">
            </div>
      <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h4 class="card-title text-center" style="font-weight:bold">Forgot Password</h4>
            <p>Please enter your email address to retrieve your password.</p>
            <form method="post" action="#" class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email Address or Mobile Number" required autofocus>
                <label for="inputEmail">Email Address or Mobile Number</label>
              </div>

              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" name="forgot"><i class="fab fa-google mr-2"></i> Submit </button>
            </form>
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