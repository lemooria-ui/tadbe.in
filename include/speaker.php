<?php
include("config.php");
?>

		<div class="gb-speakers gb-section text-center">
			<div class="container">
				<div class="title-section">
					<h1 class="color-red">
						<span class="before-top"></span>
						<span>Speakers</span>
						<span class="before-bottom"></span>
					</h1>
				</div>			
				<div class="row text-left">
				    
				    					    <?php
					    $i=1;
$sql = "SELECT * from sidd_speaker ORDER BY position ASC";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
					    ?>
				    
					<div class="col-sm-6 col-md-3">
						<div class="speaker">
							<div class="speaker-image">
								<img src="webupload/thumb/<?=$row['web_image']?>" alt="Image" class="img-responsive" style="border:1px solid #ccc">
								<ul class="speaker-social gb-list list-inline">
									<li><a href="<?=$row['facebook']?>" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="<?=$row['twitter']?>" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="<?=$row['linkedin']?>" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="<?=$row['instagram']?>" target="blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="<?=$row['google']?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="speaker-title">
								<h2><?=$row['name']?></h2>
								<span><?=$row['designation']?></span>
							</div>
						</div>
					</div>
					
					<?
}
?>

				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.gb-section -->