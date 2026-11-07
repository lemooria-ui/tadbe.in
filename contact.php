<!DOCTYPE html>
<html lang="en">
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '9b85637f-ae0f-49a0-93c4-41852f6e9a6a', f: true }); done = true; } }; })();</script> 
    
<?php
// mail start

############################### user login ##########################################
if(isset($_REQUEST['submit']))
{
$to = 'enquiry@tadbe.in'; 

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

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
    <td height='10' colspan='3' align='left'><b>Contact Details</b></td>
    </tr>

<tr>
    <td height='10' colspan='3'></td>
    </tr>

<tr>
    <td  colspan='3'><hr></td>
    </tr>


<tr>
    <td height='15' colspan='3'></td>
    </tr>

 
    <tr>
    <td  colspan='3'><b>Contact Deatils :</b></td>
    </tr>
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
    <tr>
    <td align='left' width='100'>Name</td>
    <td width='20'>:</td>
    <td align='left'>".$name."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
   
    <tr>
    <td align='left' width='100'>Email</td>
    <td width='20'>:</td>
    <td align='left'>".$email."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
    <tr>
    <td align='left' width='100'>Subject</td>
    <td width='20'>:</td>
    <td align='left'>".$subject."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
    <tr>
    <td align='left' width='100'>Message</td>
    <td width='20'>:</td>
    <td align='left'>".$message."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
   

    <tr>
    <td colspan='3'><hr></td>
    </tr>

   <tr>
    <td height='10' colspan='3'></td>
    </tr>

<tr>
<td>&nbsp;</td>
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

$from="enquiry@tadbe.in";  
$subject = "Event - Contact Details";

$message = "<html><body>".$msg."</body></html>";
 
   //$headers = 'From: '.$_POST['email'].'\r\n'.'X-Mailer: PHP/' . phpversion();
$headers  = "From: ".strip_tags($from)." \r\n";
$headers .= "Reply-To: ".strip_tags($from). "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$html = utf8_decode($html);
$ok = mail($to,$subject,$html,$headers);

?>
<script>
    window.location.href="contact.php?action=success";
</script>
<?

}
}

############################### end user login ##########################################

// mail end

?>
	
<!-- Mirrored from html.gridbootstrap.com/eventup/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 13:21:51 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include("include/script.php"); ?>
</head>
 	<body>
<?php include("include/header.php"); ?>

		<div class="gb-breadcrumb gb-bg white-color">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="page-title title-white">
						<h1>
							<span class="before-top"></span>
							<span>Contact</span>
							<span class="before-bottom"></span>
						</h1>
					</div>
			
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-breadcrumb -->
		
		<div class="gb-contact-form gb-section">
			<div class="container">
			    <div class="col-md-6">
			        
			        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>

<h2>Address</h2>
<p style="line-height:30px;">
Tamilnadu Trade Promotion Organisation, <br>
CTC Complex, Nandambakkam,<br>
Chennai 600 089.<br>
</p>

<p><b>Email</b> : enquiry@tadbe.in</p>
<p><b>Mobile</b> : +91 96770 92443</p>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/tadbe2020/" target="blank" class="fa fa-facebook"></a>
<a href="https://twitter.com/tadbe2020" target="blank" class="fa fa-twitter"></a>
<a href="https://instagram.com/tadbe2020" target="blank" class="fa fa-instagram"></a>
<!--
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
-->


			        
			        
			    </div>
			    
			    <div class="col-md-6">
			        
			        			    <?php
			    if($_REQUEST['action']=="success")
			    {
			    ?>
<div class="alert alert-success" role="alert">
  Contact information has been sent to successfully!. 
</div>			    
			    <?php
			    }
			    ?>
			        
			        
				<form action="contact.php" method="post" class="gb-form">
					<div class="row"> 
				
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="name" class="form-control" required="required" placeholder="Your Name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="email" name="email" class="form-control" required="required" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
							</div> 
						</div>  
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" required="required" rows="7" placeholder="Your Message"></textarea>
							</div>             
						</div> 					  
					</div>
					<button type="submit" name="submit" class="btn btn-red pull-right"><span>Send Message</span></button>
				</form>	
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-contact-form -->
	

<?php //include("include/map.php"); ?>
		
<?php //include("include/ticket.php"); ?>
		
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