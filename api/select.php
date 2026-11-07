<?php
 
/**
 * File to handle all API requests
 * Accepts GET and POST
 * 
 * Each request will be identified by TAG
 * Response will be JSON data
 
  /**
 * check for POST request 
 */
 
    // include db handler
    include('include/DB_Functons.php');
    $db = new DB_Functions();
 
    // response Array
    //$response = array("tag" => $tag, "error" => FALSE);

// get all products from products table

$cid = $_REQUEST['id'];
$result = mysql_query("SELECT * FROM app_customer where id='$cid'") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["success"] = 1;
	$response["data"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $data = array();
        $data["id"] = $row["id"];
        $data["fname"] = $row["fname"];
		$data["lname"] = $row["lname"];
		$data["email"] = $row["email"];
		$data["description"] = $row["description"];
		$data["houseno"] = $row["houseno"];
        // push single product into final response array
        array_push($response["data"], $data);
    }
    // success
    
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No customer found";
 
    // echo no users JSON
    echo json_encode($response);
}

?>