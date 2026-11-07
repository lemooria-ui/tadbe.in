
                                                          <? if($fetch['web_image']!=''){ ?>
                           
         <img src="webupload/thumb/<?php echo $fetch['web_image']; ?>"  border="0"  />
				 
				 
				 <? } ?>

                        <br>
<a href="dashboard.php"><input type="submit" name="" value="Profile Info"/></a><br/>
<a href="profile-image.php"><input type="submit" name="" value="Profile Image"/></a><br/>
                        
                        <?php
                        if($_SESSION['member_type']=="Stall")
                        {
                        ?>
                        
  <a href="company-details.php"><input type="submit" name="" value="Company Details"/></a><br/>
                        
                        <?
                        }
                        ?>
                        
                        <?php
                        if($_SESSION['member_type']!="Visitors")
                        {
                        ?>
                        
  <a href="events.php"><input type="submit" name="" value="Events"/></a><br/>
                        
                        <?
                        }
                        ?>
                        
<a href="documents.php"><input type="submit" name="" value="Documents"/></a><br/>

<a href="change-password.php"><input type="submit" name="" value="Change Password"/></a><br/>
<a href="logout.php"><input type="submit" name="" value="Logout"/></a><br/>