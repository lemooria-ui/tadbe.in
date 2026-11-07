<?php
 
class DB_Functions {
 
    private $db;
 
    //put your code here
    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    /**
     * Storing new user
     * returns user details
     */
    public function storeUser($name, $email, $password) {
        $uuid = uniqid('', true);
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
        $result = mysql_query("INSERT INTO users(unique_id, name, email, encrypted_password, salt, created_at) VALUES('$uuid', '$name', '$email', '$encrypted_password', '$salt', NOW())");
        // check for successful store
        if ($result) {
            // get user details 
            $uid = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM users WHERE uid = $uid");
            // return user details
            return mysql_fetch_array($result);
        } else {
            return false;
        }
    }
 
    /**
	
	
	/**
     * Storing new user
     * returns user details
    */
    public function availability_settings($userid,$marks) {
		
		//print_r($marks);
		$asize = sizeof($marks);
		
		for($i=0;$i<$asize;$i++)
		{
		  $day = $marks[$i]['day'];
		  $working = $marks[$i]['working'];
		  $morning_working = $marks[$i]['morning_working'];
		  $morning_start = $marks[$i]['morning_start'];
		  $morning_end = $marks[$i]['morning_end'];
		  $afternoon_working = $marks[$i]['afternoon_working'];
		  $afternoon_start = $marks[$i]['afternoon_start'];
		  $afternoon_end = $marks[$i]['afternoon_end'];
  		  $evening_working = $marks[$i]['evening_working'];
		  $evening_start = $marks[$i]['evening_start'];
		  $evening_end = $marks[$i]['evening_end'];
		  
		  $sql = "INSERT INTO expert_availabilty_default(expert_id, day, working, morning_working, morning_start, morning_end,afternoon_working,afternoon_start,afternoon_end,evening_working,evening_start,evening_end,inserttime) VALUES('$userid', '$day', '$working', '$morning_working', '$morning_start', '$morning_end', '$afternoon_working', '$afternoon_start', '$afternoon_end', '$evening_working', '$evening_start', '$evening_end',NOW())"; 
		  $result = mysql_query($sql);	
		}
        // check for successful store
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
	
	public function availability_settings_edit($userid,$marks) {
		
		//print_r($marks);
		$asize = sizeof($marks);
		
		for($i=0;$i<$asize;$i++)
		{
		  $day = $marks[$i]['day'];
		  $working = $marks[$i]['working'];
		  $morning_working = $marks[$i]['morning_working'];
		  $morning_start = $marks[$i]['morning_start'];
		  $morning_end = $marks[$i]['morning_end'];
		  $afternoon_working = $marks[$i]['afternoon_working'];
		  $afternoon_start = $marks[$i]['afternoon_start'];
		  $afternoon_end = $marks[$i]['afternoon_end'];
  		  $evening_working = $marks[$i]['evening_working'];
		  $evening_start = $marks[$i]['evening_start'];
		  $evening_end = $marks[$i]['evening_end'];

		  $sql = "update expert_availabilty_default set expert_id='$userid',day='$day',working='$working',morning_working='$morning_working',morning_start='$morning_start',morning_end='$morning_end',afternoon_working='$afternoon_working',afternoon_start='$afternoon_start',afternoon_end='$afternoon_end',evening_working='$evening_working',evening_start='$evening_start',evening_end='$evening_end' where day='$day' and expert_id='$userid'"; 
		  $result = mysql_query($sql);	
		}
        // check for successful store
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function select_availability_time($expert_id) {

		$result = mysql_query("SELECT * FROM expert_availabilty_default WHERE expert_id = '$expert_id'") or die(mysql_error());
        // check for result
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$i=0;
			while($result2 = mysql_fetch_array($result))
    		{
			$get[$i]['day'] = $result2['day'];
			$get[$i]['working'] = $result2['working'];
			$get[$i]['morning_working'] = $result2['morning_working'];
			$get[$i]['morning_start'] = $result2['morning_start'];
			$get[$i]['morning_end'] = $result2['morning_end'];
			$get[$i]['afternoon_working'] = $result2['afternoon_working'];
			$get[$i]['afternoon_start'] = $result2['afternoon_start'];
			$get[$i]['afternoon_end'] = $result2['afternoon_end'];
			$get[$i]['evening_working'] = $result2['evening_working'];
			$get[$i]['evening_start'] = $result2['evening_start'];
			$get[$i]['evening_end'] = $result2['evening_end'];
			$i++;
			}

            return $get;
        } else {
            // user not found
            return false;
        }
    }
	
	public function after_appointment_unavaiblitity_time($userid,$unavailability_time) {

		//echo "SELECT * FROM experts WHERE email = '$email'"; 
		$result = mysql_query("SELECT * FROM expert_availabilty_default WHERE expert_id = '$userid'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$result = mysql_fetch_array($result);
			$expert_id = $result['expert_id'];
			$sql = mysql_query("update expert_availabilty_default set After_appointment_Unavaiblitity_Time='".$unavailability_time."' where expert_id='".$expert_id."'");	
			return $result;
        } else {
            // user not found
            return false;
        }
    }
	
	public function available($expert_id,$day) {

		$result = mysql_query("SELECT * FROM expert_availabilty_default WHERE expert_id = '$expert_id' and day='$day'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$result = mysql_fetch_array($result);
			
                return $result;
        } else {
            // user not found
            return false;
        }
    }
	
	
 
     /**
     * Get user by email and password
     */
    public function getUserByEmailAndPassword($email, $password) {

		//echo "SELECT * FROM experts WHERE email = '$email'";
		$result = mysql_query("SELECT * FROM experts WHERE email = '$email'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            $result = mysql_fetch_array($result);
            //$salt = $result['salt'];
            $encrypted_password = $result['password'];
            //$hash = $this->checkhashSSHA($salt, $password);
            // check for password equality
            if ($encrypted_password == $password) {
                // user authentication details are correct
                return $result;
            }
        } else {
            // user not found
            return false;
        }
    }
	
	public function getPassword($email) {

		//echo "SELECT * FROM experts WHERE email = '$email'"; 
		$result = mysql_query("SELECT * FROM experts WHERE email = '$email'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$result = mysql_fetch_array($result);
			$user_email = $result['email']; 
			$company_id = $result['company_id'];  
			if ($user_email == $email) {
				
			$result2 = mysql_query("SELECT * FROM companies WHERE company_id = '$company_id'") or die(mysql_error());
			$result2 = mysql_fetch_array($result2);
			
			$result3 = mysql_query("SELECT * FROM company_admin WHERE company_id = '$company_id'") or die(mysql_error());
			$result3 = mysql_fetch_array($result3);
				
			// email start
			
				if(isset($user_email))
	            {
		$password = $result['password']; 
		$email = $result['email'];
		$firstname = $result['firstname'];
		$lastname = $result['lastname'];
	
		//*********** Mail Function ********************

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
    <td height='10' colspan='3' align='left'><b>Pulse 24/7 - Account Information</b></td>
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
    <td colspan='3'>Dear&nbsp;".$firstname."&nbsp;".$lastname.",</td>
    </tr>
    
    	
	<tr>
    <td height='15' colspan='3'></td>
    </tr>
		<tr>
    <td height='15' colspan='3'>You have recently requested your password :</td>
    </tr>
	
		<tr>
    <td height='15' colspan='3'></td>
    </tr>
    
        	
	<tr>
    <td colspan='3'>Your password is : ".$password."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
	    <tr>
    <td height='15' colspan='3'>Please seva this information at a safe place and delete this email after seeing your password information for security.</td>
    </tr>
	
	    <tr>
    <td height='15' colspan='3'></td>
    </tr>
	
    <tr>
    <td height='15' colspan='3'>Sincerely,</td>
    </tr>
	
		    <tr>
    <td height='15' colspan='3'> ".$result2['name'].", Team</td>
    </tr>
 
	<tr>
    <td colspan='3'><hr></td>
    </tr>
	
	    <tr>
    <td height='10' colspan='3'></td>
    </tr>
    
	<tr>
    <td colspan='3'>&nbsp;</td>
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
</table>
			  ";	
	
	    $to = $email;  
		$subject = "Pulse 24/7 - Lost Passowrd Notification";
	    
		//$headers = 'From: '.$_POST['email'].'\r\n'.'X-Mailer: PHP/' . phpversion();
		$headers  = "From:".strip_tags($result2['name'])." <".strip_tags($result2['name']).">\r\n";
		$headers .= "Reply-To: ".strip_tags($$result3['email']). "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	    $html = utf8_decode($mail_body);
        mail($to, $subject, $html, $headers);
		}
			
			// end 
			
			return $result;
			}
			
                
        } else {
            // user not found
            return false;
        }
    }
	
	public function ChangePassword($email,$password,$newpassword) {

		//echo "SELECT * FROM experts WHERE email = '$email'"; 
		$result = mysql_query("SELECT * FROM experts WHERE email = '$email'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$result = mysql_fetch_array($result);
			
			$expert_id = $result['expert_id'];
			$old_password = $result['password'];
			$newpassword = $newpassword;
		
			if ($old_password == $password) {
			
			$sql = mysql_query("update experts set password='".$newpassword."' where expert_id='".$expert_id."'");	
				
			return $result;
			}
			
                
        } else {
            // user not found
            return false;
        }
    }
	
	
	public function getUserDetails($expert_id) {

		$result = mysql_query("SELECT * FROM experts WHERE expert_id = '$expert_id'") or die(mysql_error());
        // check for result 
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
			$result = mysql_fetch_array($result);
                return $result;
        } else {
            // user not found
            return false;
        }
    }
 
    /**
     * Check user is existed or not
     */
    public function isUserExisted($email) {
        $result = mysql_query("SELECT email from users WHERE email = '$email'");
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            // user existed 
            return true;
        } else {
            // user not existed
            return false;
        }
    }
 
    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }
 
}
 
?>