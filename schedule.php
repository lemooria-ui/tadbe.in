<?php
include("config.php");
?>

<style>
    
    .author-image, .schedule-summary {
    display: block !important;
}
    
</style>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.gridbootstrap.com/eventup/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Mar 2019 13:21:51 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include("include/script.php"); ?>
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '9b85637f-ae0f-49a0-93c4-41852f6e9a6a', f: true }); done = true; } }; })();</script> 
</head>
 	<body>
<?php include("include/header.php"); ?>

		<div class="gb-breadcrumb gb-bg white-color">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="page-title title-white">
						<h1>
							<span class="before-top"></span>
							<span>Schedule</span>
							<span class="before-bottom"></span>
						</h1>
					</div>
			
				</div>
			</div><!-- /.container -->
		</div><!-- /.gb-breadcrumb -->
		
		

		<div class="gb-schedules gb-section text-center">
			<div class="container">
				<div class="schedule-content text-left">
					<ul class="nav nav-tabs" role="tablist">
					    
					    <?php
					    $i=1;
$sql = "SELECT distinct(event_date) from sidd_events";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
					    ?>
					    
						<li role="presentation" <?php if($i==1) { ?> class="active" <? } ?> ><a href="#one<?=$i?>" aria-controls="one" role="tab" data-toggle="tab">
						    <span>Day One</span><?=$row['event_date']?></a></li>
						
<?php $i++; } ?>

					</ul>
					<div class="tab-content">
					    
					    					    <?php
					    $j=1;
$sql2 = "SELECT distinct(event_date) from sidd_events";
$result2 = $conn->query($sql2);
while($row2 = $result2->fetch_assoc()) {
					    ?>
					    
						<div role="tabpanel" class="tab-pane fade in <?php if($j==1) { ?> active <? } ?>" id="one<?=$j?>">
							<div class="schedule">
								<ul class="gb-list">
								    
								    
					    <?php
					    $i=1;
$sql = "SELECT * from sidd_events where event_date='".$row2['event_date']."'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
					    ?>								    
								    
									<li <?php if($i==1) { ?> class="active" <? } ?>>
										<div class="row">
											<div class="col-sm-3 col-md-2">
												<div class="author">
												    
<?php
if($row['web_image']!="")
{
    $img = "webupload/thumb/".$row['web_image'];
}
else
{
    $img = 'img/user.jpg';
}
?>
												    
													<div class="author-image">
								            			<a href="#"><img src="<?=$img?>" alt="Image" class="img-responsive img-circle"></a>
													</div>
								            		<div class="author-title">
								                		<h2><?=$row['name']?></h2>
								                		<span><?=$row['designation']?></span>
								                	</div>
								            	</div>
											</div>
											<div class="col-sm-9 col-md-10">
												<div class="schedule-info">
													<h2><a href="#"><?=$row['web_title']?></a></h2>
													<div class="schedule-summary">
														<p><?=$row['web_content']?></p>
													</div>
													<ul class="gb-list">
														<li><i class="fa fa-clock-o" aria-hidden="true"></i><span>Time:</span> <?=$row['time_from']?> - <?=$row['time_to']?></li>
														<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Venue:</span> <?=$row['venue']?></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									
<?php $i++; } ?>
									
								</ul>							
							</div><!-- /.schedule -->
						</div>

<?php $j++; } ?>
					</div>

				</div><!-- /.schedule-content -->				
			</div><!-- /.container -->
		</div><!-- /.gb-section -->		

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