<?php 
session_start();
error_reporting(0);
include('webadmin/include/config.php');

 $sql="select * from sidd_users where user_id=".$_SESSION['member_id']; 
 $value=mysql_query($sql); 
 $count=mysql_num_rows($value); 
 $fetch=mysql_fetch_array($value);
 
$user_id = $_SESSION['member_id'];
$mobile =  $fetch['mobile'];
$code = rand();

 $sql_2="select * from user_verify where user_id=".$_SESSION['member_id']; 
 $value_2=mysql_query($sql_2); 
 $count_2=mysql_num_rows($value_2);

if($count_2==0)
{
$sql_i = "insert into user_verify (user_id,mobile,code) values ('$user_id','$mobile','$code')";
}
else
{
   $sql_i = "update user_verify set code='$code' where user_id=".$_SESSION['member_id'];
}
mysql_query($sql_i); 

//SMS START
// Textlocal account details
$username = urlencode('trlemooria');
$password = urlencode('702405');

// Message details
$phone = $mobile;
$numbers = urlencode($phone);
$sender = urlencode('TADBEA');
$message = urlencode('Verification code is: '.$code.'. To enquiry - +91 9677092443 ');

$data = 'username=' . $username . '&password=' . $password . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
$ch = curl_init('http://sms99.co.in/pushsms.php?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
//SMS END

?>

<script>
    window.location.href="verify_mobile.php";
</script>