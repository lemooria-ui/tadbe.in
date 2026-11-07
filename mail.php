<?php
############################### user login ##########################################
if(1)
{

$to = 'mm.gnanadoss@gmail.com';

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
    <td height='10' colspan='3' align='left'><b>GPS Contact Details</b></td>
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
    <td colspan='3'>Hi Admin</td>
    </tr>
    
    
<tr>
    <td height='15' colspan='3'></td>
    </tr>

  
    <tr>
    <td  colspan='3'><b>Please find below your customer contact Info :</b></td>
    </tr>
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
    <tr>
    <td align='left' width='100'>First Name</td>
    <td width='20'>:</td>
    <td align='left'>".$firstname."</td>
    </tr>
   
    <tr>
    <td height='15' colspan='3'></td>
    </tr>
    
        
    <tr>
    <td align='left' width='100'>Last Name</td>
    <td width='20'>:</td>
    <td align='left'>".$lastname."</td>
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
    <td align='left' width='100'>Phone</td>
    <td width='20'>:</td>
    <td align='left'>".$phone."</td>
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

   $from="info@gpscorpusa.com";  
$subject = "GPS - Contact Details"; 

    $message = "<html><body>".$msg."</body></html>"; 
  
   //$headers = 'From: '.$_POST['email'].'\r\n'.'X-Mailer: PHP/' . phpversion();
$headers  = "From: ".strip_tags($from)." \r\n";
$headers .= "Reply-To: ".strip_tags($from). "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$html = utf8_decode($html);
    mail($to,$subject,$html,$headers);
?>
<script>window.location="contact.php?action=success";</script>
    <?php
}
else
{
?>
<script>window.location="contact.php?action=failure";</script>
    <?php
}
}
############################### end user login ##########################################
?>
