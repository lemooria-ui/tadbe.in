<?php
/*$conn = mysql_connect('localhost:3306', 'orangemenshostel_multiuser', 'multi123@#$') or die('Error connecting to mysql');
$dbname = 'orangemenshostel_multiuser';
mysql_select_db($dbname,$conn) or die('Error connecting to database');*/
?>

<?php 
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
function connect_dre_db()
{		
	define("DB_PRIFIX", "");
	
		//local
		$username = "webdesi4_estiloxnew";
		$password = "webdesi4_estiloxnew";
		$database = "webdesi4_estiloxnew";
		$db_host = "localhost:3306";	
		
	
		
// 		$conn = mysqli_connect($db_host, $username, $password, $database);
 
		// return database handler
// 		$GLOBALS['conn'] = $conn;



	 
	//$conn = mysql_connect('localhost:3306', 'orangemenshostel_multiuser', 'multi123@#$') or die('Error connecting to mysql');
	$conn = mysql_connect($db_host, $username, $password) or die('Error connecting to mysql');
    $dbname = $database;
    mysql_select_db($dbname,$conn) or die('Error connecting to database');

}

function getServerURL(){
	$dir_path = '/mobile';

	//$dir_path = '';
    $url = 'http'.(isset($_SERVER['HTTPS'])?'s':'').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$pu = parse_url($url);
    return $pu["scheme"] . "://" . $pu["host"].$dir_path;
}

?>