		<div class="gb-menu">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header" style="margin-top:-40px;">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo.png" alt="Logo" style="width:300px"></a>
					</div><!-- /.navbar-header -->
					

<?php
$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
$currentFile = $parts[count($parts) - 1];
?>

					<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li <?php if($currentFile=="index.php") { ?> class="active" <?php } ?>><a href="index.php">Home</a></li>
							<li <?php if($currentFile=="about.php") { ?> class="active" <?php } ?>><a href="about.php">About</a></li>
							<li <?php if($currentFile=="speaker.php") { ?> class="active" <?php } ?>><a href="speaker.php">Speaker</a></li>
							<li <?php if($currentFile=="schedule.php") { ?> class="active" <?php } ?>><a href="schedule.php">schedule</a></li>
							<li <?php if($currentFile=="gallery.php") { ?> class="active" <?php } ?> style="display:none">
							    <a href="gallery.php">Gallery</a></li>
							<li <?php if($currentFile=="contact.php") { ?> class="active" <?php } ?>><a href="contact.php">Contact</a></li>
							
<?php
if($_SESSION['member_id']=="")
{
?>
							<li <?php if($currentFile=="register.php") { ?> class="active" <?php } ?>><a href="register.php">Register</a></li>
							<li <?php if($currentFile=="login.php") { ?> class="active" <?php } ?>><a href="login.php">Login</a></li>
<?
}
else
{
?>	
<li><a href="dashboard.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
}
?>
							
							
						</ul>	
					</div>
				</div><!-- /.container -->					
			</nav><!-- /.navbar -->										
		</div><!-- /.gb-menu -->