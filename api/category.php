<?php
 
include('include/DB_Functions.php');
$db = new DB_Functions();

$action = $_REQUEST['action'];

if($action=="category")
{
$result = mysql_query("SELECT * FROM storecategoty order by id asc") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["status"] = "success";
	$response["result"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        $data = array();
        $data["category_id"] = $row["id"];
        $data["category_name"] = $row["store_cat"];
		$data["category_image"] = $row["web_image"];
        $data["image_url"] = "http://orangemenshostel.com/multiadmin/webupload/original/".$row["web_image"];
        array_push($response["result"], $data);
    }
    echo json_encode($response);
} else {
    $response["status"] = 0;
    $response["result"] = "No category found";
    echo json_encode($response);
}
}

// store sub category

if($action=="sub_category")
{
    
$category_id = $_REQUEST['category_id'];
    
$result = mysql_query("SELECT * FROM storesubcategoty where scid='".$category_id."' order by id asc") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["status"] = "success";
	$response["result"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        $data = array();
        $data["sub_category_id"] = $row["id"];
        $data["sub_category_name"] = $row["store_subcat"];
		$data["sub_category_image"] = $row["web_image"];
        $data["image_url"] = "http://orangemenshostel.com/multiadmin/webupload/original/".$row["web_image"];
        array_push($response["result"], $data);
    }
    echo json_encode($response);
} else {
    $response["status"] = 0;
    $response["result"] = "No category found";
    echo json_encode($response);
}
}

// store

if($action=="store")
{
    
$category_id = $_REQUEST['category_id'];
$sub_category_id = $_REQUEST['sub_category_id'];
    
$result = mysql_query("SELECT * FROM kiwi_users where scid='".$category_id."' and sscid='".$sub_category_id."' order by id asc") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["status"] = "success";
	$response["result"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        $data = array();
        $data["store_id"] = $row["id"];
        $data["store_name"] = $row["store_name"];
        $data["owner_name"] = $row["name"];
		$data["email"] = $row["email"];
		$data["open_time"] = $row["open_time"];
		$data["close_time"] = $row["close_time"];
		$data["phone"] = $row["phone"];
		$data["address"] = $row["address"];
        $data["store_phone"] = "http://orangemenshostel.com/multiadmin/webupload/original/".$row["web_image"];
        array_push($response["result"], $data);
    }
    echo json_encode($response);
} else {
    $response["status"] = 0;
    $response["result"] = "No category found";
    echo json_encode($response);
}
}

if($action=="products")
{
    
$store_id = $_REQUEST['store_id'];

$result = mysql_query("SELECT * FROM kiwi_products where user_id='".$store_id."' order by id asc") or die(mysql_error());

if (mysql_num_rows($result) > 0) {
    $response["status"] = "success";
	$response["result"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        $data = array();
        $data["product_id"] = $row["id"];
        $data["name"] = $row["web_title"];
        $data["content"] = $row["web_content"];
        $data["image"] = $row["web_image"];
		$data["price"] = $row["price"];
        array_push($response["result"], $data);
    }
    echo json_encode($response);
} else {
    $response["status"] = 0;
    $response["result"] = "No category found";
    echo json_encode($response);
}
}

?>