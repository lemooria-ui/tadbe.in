<?php
class SubFunctions
{
    private $db;
    // constructor
    function __construct()
    {
        require_once 'config.php';
        connect_dre_db();
    }
    
    
    public function getStoreBanner($inputs)
    {
        
        $result_arr = array();
        $store_id   = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        
        $result_arr = array();
        $sql        = "SELECT * FROM kiwi_users where id=" . $store_id;
        $result = mysql_query($sql) or die(mysql_error());
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            while ($row = mysql_fetch_array($result)) {
                
                $data                 = array();
                $data["store_banner"] = $row["store_banner"];
                $data["store_banner"] = "http://bonda.co.in/admin/webupload/original/" . $row["store_banner"];
                
                $result_arr = $data;
            }
            
        }
        return $result_arr;
        
    }
    
    
    public function getBanner($inputs)
    {
        
        
        $result_arr = array();
        $sql        = "SELECT * FROM kiwi_banner order by id asc";
        $result = mysql_query($sql) or die(mysql_error());
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            while ($row = mysql_fetch_array($result)) {
                
                $data                   = array();
                $data["category_image"] = $row["web_image"];
                $data["image_url"]      = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                
                $result_arr[] = $data;
            }
            
        }
        return $result_arr;
        
    }
    
    public function userUpdate($inputs)
    {
        
        $result_arr = array();
        
        $id    = (isset($inputs['id']) && $inputs['id'] != '') ? $inputs['id'] : '';
        $name  = (isset($inputs['name']) && $inputs['name'] != '') ? $inputs['name'] : '';
        $email = (isset($inputs['email']) && $inputs['email'] != '') ? $inputs['email'] : '';
        
        $address = (isset($inputs['address']) && $inputs['address'] != '') ? $inputs['address'] : '';
        $city    = (isset($inputs['city']) && $inputs['city'] != '') ? $inputs['city'] : '';
        $area    = (isset($inputs['area']) && $inputs['area'] != '') ? $inputs['area'] : '';
        $state   = (isset($inputs['state']) && $inputs['state'] != '') ? $inputs['state'] : '';
        $country = (isset($inputs['country']) && $inputs['country'] != '') ? $inputs['country'] : '';
        $zipcode = (isset($inputs['zipcode']) && $inputs['zipcode'] != '') ? $inputs['zipcode'] : '';
        
        $latitude = (isset($inputs['latitude']) && $inputs['latitude'] != '') ? $inputs['latitude'] : '';
        $longitude = (isset($inputs['longitude']) && $inputs['longitude'] != '') ? $inputs['longitude'] : '';
        
        $sql = "UPDATE kiwi_customer SET ";
            if($name != '') 
                $sql .=" name='$name', ";
            if($email != '') 
                $sql .=" email='$email', ";
            if($address != '') 
                $sql .=" address='$address', ";
            if($latitude != '') 
                $sql .=" latitude='$latitude', ";
            if($longitude != '') 
                $sql .=" longitude='$longitude', ";
            if($city != '') 
                $sql .=" city='$city', ";
            if($area != '') 
                $sql .=" area='$area', ";
            if($state != '') 
                $sql .=" state='$state', ";
            if($country != '') 
                $sql .=" country='$country', ";
            if($zipcode != '') 
                $sql .=" zipcode='$zipcode', ";
            
            $sql .=" signup_status=1 where id=" . $id;
        
        $res = mysql_query($sql) or die(mysql_error());
        
        if ($res) {
            $sql3 = "SELECT * FROM kiwi_customer where id='$id' limit 1";
            $result3 = mysql_query($sql3) or die(mysql_error());
            if ($result3) {
                $row3              = mysql_fetch_array($result3);
                $result_arr        = $row3;
                $msg               = "User Details Updated";
                $result_arr['msg'] = $msg;
            }
            
        } else {
            $msg                         = "User Details Update Failed";
            $result_arr['msg']           = $msg;
            $result_arr['signup_status'] = "0";
            
        }
        
        return $result_arr;
        
    }
    
    
    public function addCart($inputs)
    {
        
        $product_id = (isset($inputs['product_id']) && $inputs['product_id'] != '') ? $inputs['product_id'] : '';
        $qty        = (isset($inputs['qty']) && $inputs['qty'] != '') ? $inputs['qty'] : '';
        $weight     = (isset($inputs['weight']) && $inputs['weight'] != '') ? $inputs['weight'] : '';
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $store_id   = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $cart_type  = (isset($inputs['cart_type']) && $inputs['cart_type'] != '') ? $inputs['cart_type'] : '';
        
        $result_arr = array();
        
        $sql_p = "SELECT * FROM kiwi_products where id='$product_id'";
        $result_p = mysql_query($sql_p) or die(mysql_error());
        $row_p        = mysql_fetch_array($result_p);
        $product_name = $row_p['web_title'];
        $price        = $row_p['price'];
        
        $sql = "SELECT * FROM cart where user_id='$user_id' and product_id='$product_id'";
        $result = mysql_query($sql) or die(mysql_error());
        $num = mysql_num_rows($result);
        
        if ($num > 0) {
            $msg       = "Success";
            $is_verify = 1;
            
            $row     = mysql_fetch_array($result);
            $old_qty = $row['qty'];
            if ($cart_type == "sub") {
                $new_qty = $old_qty - $qty;
            } else {
                $new_qty = $old_qty + $qty;
            }
            if ($new_qty > 0) {
                $total = $new_qty * $price * $weight;
                $sql   = "UPDATE cart SET qty='$new_qty',total='$total', weight='$weight' where user_id='$user_id' and product_id='$product_id'";
            } else {
                $sql = "DELETE from cart where user_id='$user_id' and product_id='$product_id'";
            }
            mysql_query($sql) or die(mysql_error());
            
        } else {
            
            $total      = $qty * $price * $weight;
            $sql_insert = "INSERT into cart(user_id,store_id,product_id,product_name,price,qty,weight,total) values('$user_id','$store_id','$product_id','$product_name','$price','$qty','$weight','$total')";
            $result2 = mysql_query($sql_insert) or die(mysql_error());
            $last_id = mysql_insert_id();
        }
        
        
        $sql3 = "SELECT * FROM cart where user_id='$user_id'";
        $result3 = mysql_query($sql3) or die(mysql_error());
        if ($result3) {
            while ($row3 = mysql_fetch_array($result3)) {
                $result_arr[] = $row3;
            }
        }
        
        return $result_arr;
        
    }
    
    
    public function getCart($inputs)
    {
        
        
        $user_id = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        
        $result_arr = array();
        
        
        $sql3 = "SELECT * FROM cart where user_id='$user_id'";
        $result3 = mysql_query($sql3) or die(mysql_error());
        if ($result3) {
            while ($row3 = mysql_fetch_array($result3)) {
                $result_arr[] = $row3;
            }
        }
        
        return $result_arr;
        
    }
    
    public function clearCart($inputs)
    {
        
        
        $user_id = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        
        $result_arr = array();
        
        
        $sql3 = "DELETE FROM cart where user_id='$user_id'";
        $result3 = mysql_query($sql3) or die(mysql_error());
        if ($result3) {
            
            $result_arr = $this->getCart($inputs);
            
        }
        
        return $result_arr;
        
    }
    
    
    public function getCounselor($inputs)
    {
        
        
        $result_arr = array();
        $sql        = "SELECT * FROM sidd_members where user_type='Counselor' and status='Active' order by name asc";
        $result = mysql_query($sql) or die(mysql_error());
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            while ($row = mysql_fetch_array($result)) {
                
                $data                   = array();
                $data["user_id"]    = $row["user_id"];
                $data["name"]  = $row["name"];
                $data["email"] = $row["email"];
                $data["mobile"] = $row["mobile"];
                $data["address"] = $row["address"];
                $data["zipcode"] = $row["zipcode"];

                $result_arr[] = $data;
            }
            
        }
        return $result_arr;
        
    }
    
        public function getStudent($inputs)
    {
        
        
        $result_arr = array();
        $sql        = "SELECT * FROM sidd_members where user_type='Student' and status='Active' order by name asc";
        $result = mysql_query($sql) or die(mysql_error());
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            while ($row = mysql_fetch_array($result)) {
                
                $data                   = array();
                $data["user_id"]    = $row["user_id"];
                $data["name"]  = $row["name"];
                $data["email"] = $row["email"];
                $data["mobile"] = $row["mobile"];
                $data["address"] = $row["address"];
                $data["zipcode"] = $row["zipcode"];

                $result_arr[] = $data;
            }
            
        }
        return $result_arr;
        
    }
    
    
    public function getOTP($inputs)
    {
        
        $phone = (isset($inputs['phone']) && $inputs['phone'] != '') ? $inputs['phone'] : '';
        
$numbers = '91' . $phone; 
$otp_number = rand(100000, 999999);

       // START CUSTOMER SMS
        
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://2factor.in/API/V1/990d56a1-b9d4-11e9-ade6-0200cd936042/SMS/".$phone."/".$otp_number."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
        
        // END SMS
        

        $expire_stamp = date('Y-m-d H:i:s', strtotime("+5 min"));
        $now_stamp    = date("Y-m-d H:i:s");
        
        $sql = "INSERT INTO `get_opt` (`mobile_number`, `otp_number`, `insert_time`, `expire_time`) VALUES ('$phone', '$otp_number','$now_stamp','$expire_stamp')";
        $result = mysql_query($sql) or die(mysql_error());
        
        if (1) {
            $msg     = "OTP Send Successfully";
            $is_sent = 1;
        } else {
            $msg     = "OTP Not Send";
            $is_sent = 0;
        }
        
        
        $result_arr            = array();
        $result_arr['phone']   = $phone;
        $result_arr['msg']     = $msg;
        $result_arr['is_sent'] = $is_sent;
        
        return $result_arr;
        
    }
    
    
    
    public function checkOTP($inputs)
    {
        $phone = (isset($inputs['phone']) && $inputs['phone'] != '') ? $inputs['phone'] : '';
        $otp   = (isset($inputs['otp']) && $inputs['otp'] != '') ? $inputs['otp'] : '';
        
        $result_arr = array();
        
        $sql = "SELECT * FROM get_opt where mobile_number='$phone' order by id desc limit 1  ";
        //exit;
        $result = mysql_query($sql) or die(mysql_error());
        // echo '<br>'.
        $num = mysql_num_rows($result);
        $fetch = mysql_fetch_array($result);
        
       
        if ($num > 0 ) {
            $now_stamp    = date("Y-m-d H:i:s");
        $expire_time = $fetch['expire_time'];
            
            if($fetch['otp_number']==$otp && $expire_time >=$now_stamp)
            {
            $msg       = "OTP Verified Successfully";
            $is_verify = 1;
            }
            else
            {
                $msg       = "OTP Not Verified";
            $is_verify = 0;
            }
            
        } else {
            $msg       = "OTP Not Verified";
            $is_verify = 0;
            
        }
        /*if ($phone == '111111') {
            $is_verify = 1;
        }*/
        //  echo '<br>'. $is_verify;
        if ($is_verify == 1) {
            
            $sql2 = "SELECT * FROM kiwi_customer where phone='$phone' limit 1";
            $result2 = mysql_query($sql2) or die(mysql_error());
            $num2 = mysql_num_rows($result2);
            
            if ($num2 > 0) {
                $row2       = mysql_fetch_array($result2);
                $result_arr = $row2;
                
            } else {
                $date_register = date("Y-m-d H:i:s");
                $sql_insert = "INSERT into kiwi_customer(phone,date_register) values('$phone','$date_register')";
                $result2 = mysql_query($sql_insert) or die(mysql_error());
                $last_id = mysql_insert_id();
                $sql3    = "SELECT * FROM kiwi_customer where id='$last_id' limit 1";
                $result3 = mysql_query($sql3) or die(mysql_error());
                if ($result3) {
                    $row3       = mysql_fetch_array($result3);
                    $result_arr = $row3;
                }
                
            }
            
        }else{
            $result_arr['signup_status'] = '0';
        }
        
        
        $result_arr['msg']       = $msg;
        $result_arr['is_verify'] = $is_verify;
        
        return $result_arr;
        
    }
    
    
    public function getSubCategory($inputs)
    {
        
        $result_arr  = array();
        $category_id = (isset($_REQUEST['category_id']) && $_REQUEST['category_id'] != '') ? $_REQUEST['category_id'] : '';
        $querys      = "SELECT * FROM wl_categories where parent_id=".$category_id;
        
        $querys .= "  order by category_id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data                       = array();
                $data["sub_category_id"]    = $row["category_id"];
                $data["sub_category_name"]  = $row["category_name"];
                $data["sub_category_image"] = $row["category_image"];
                //$data["image_url"]          = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                $result_arr[]               = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    public function getStore($inputs)
    {
        
        $result_arr      = array();
        $category_id     = (isset($inputs['category_id']) && $inputs['category_id'] != '') ? $inputs['category_id'] : '';
        $sub_category_id = (isset($inputs['sub_category_id']) && $inputs['sub_category_id'] != '') ? $inputs['sub_category_id'] : '';
        $search_text     = (isset($inputs['search_text']) && $inputs['search_text'] != '') ? $inputs['search_text'] : '';
        
        $querys = "SELECT * FROM kiwi_users where id!=49 and user_id='' and del=1 and active=1";
        if (isset($search_text) && $search_text != '') {
            $querys .= " AND store_name LIKE '%$search_text%' ";
        }
        if (isset($category_id) && $category_id != '') {
            $querys .= " AND scid='$category_id' ";
        }
        if (isset($sub_category_id) && $sub_category_id != '') {
            $querys .= " AND sscid='$sub_category_id' ";
        }
        $querys .= "  order by store_name ASC ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                // echo '<pre>';print_r($row);exit;
                $data                 = array();
                $data["store_id"]     = $row["id"];
                $data["store_name"]   = $row["store_name"];
                $data["owner_name"]   = $row["name"];
                $data["email"]        = $row["email"];
                $data["open_time"]    = $row["open_time"];
                $data["close_time"]   = $row["close_time"];
                $data["phone"]        = $row["phone"];
                $data["address"]      = $row["address"];
                
 // address
 
                $add = $row["address"];
                $address = "";
                $res = explode(",", $add);
                
                $len = sizeof($res);
                for($i=0;$i<$len;$i++)
                {
                    if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $res[$i]) )
                    { 
                    //echo('Has numbers and letters.');
                    } else 
                    {
                    $address = $address.$res[$i].",";
                    } 
                }
                $data["address"]  = $address;
 
 // end
                
                // $data["store_status"] = $row["store_status"];
                $data["store_status"] = $this->isStoreOpen($row["open_time"],$row["close_time"]);
                $data["rating"]     = $this->getStoreRatingById($row["id"]);
                $data["image_url"]    = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                $result_arr[]         = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    public function getProducts($inputs)
    {
        

 $category_id     = (isset($_REQUEST['category_id']) && $_REQUEST['category_id'] != '') ? $_REQUEST['category_id'] : ''; 

        
        $result_arr = array();
        $sql        = "SELECT * FROM  wl_products where category_id=".$category_id;
        $result = mysql_query($sql) or die(mysql_error());
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            while ($row = mysql_fetch_array($result)) {
                
                $data                   = array();
                $data["products_id"]    = $row["products_id"];
                $data["product_name"]  = $row["product_name"];
                $data["product_price"]  = $row["product_price"];
                //$data["category_image"] = $row["category_image"];
                //$data["category_image"]      = "/" . $row["category_image"];

                $result_arr[] = $data;
            }
            
        }
        return $result_arr;
        
    }
    
    
    
    public function getProductsCategory($inputs)
    {
        
        $result_arr = array();
        $store_id   = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        
        
        $querys = "SELECT * FROM kiwi_category where status='Active' and del_status=0";
        if (isset($store_id) && $store_id != '') {
            $querys .= " AND user_id='" . $store_id . "' ";
        }
        
        $querys .= "  order by id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                
                $sql_p = "SELECT * FROM kiwi_products where status='Active' and cid=".$row["id"];
                $res_p = mysql_query($sql_p) or die(mysql_error());
                if (mysql_num_rows($res_p) > 0) 
                {
                $data                          = array();
                //echo '<pre>';print_r($row);exit;
                $data["product_category_id"]   = $row["id"];
                $data["product_category_name"] = $row["web_title"];
                // $data["product_category_image_url"] = "http://bonda.co.in/admin/webupload/original/".$row["web_image"];
                $result_arr[]                  = $data;
                }
            }
        }
        
        
        return $result_arr;
        
    }
    
    public function getProductsSubCategory($inputs)
    {
        
        $result_arr          = array();
        $store_id            = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $product_category_id = (isset($inputs['product_category_id']) && $inputs['product_category_id'] != '') ? $inputs['product_category_id'] : '';
        
        
        $querys = "SELECT * FROM kiwi_subcategory where status='Active' ";
        if (isset($store_id) && $store_id != '') {
            $querys .= " AND user_id='" . $store_id . "' ";
        }
        if (isset($product_category_id) && $product_category_id != '') {
            $querys .= " AND cat_id='$product_category_id' ";
        }
        
        $querys .= "  order by id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data                                   = array();
                //echo '<pre>';print_r($row);exit;
                $data["store_id"]                       = $store_id;
                $data["product_category_id"]            = $product_category_id;
                $data["product_sub_category_id"]        = $row["id"];
                $data["product_sub_category_name"]      = $row["web_title"];
                $data["product_sub_category_image_url"] = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                $result_arr[]                           = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    public function getProductsCategoryWise($inputs)
    {
        
        $result_arr          = array();
        $store_id            = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $product_category_id = (isset($inputs['product_category_id']) && $inputs['product_category_id'] != '') ? $inputs['product_category_id'] : '';
        
        
        $querys = "SELECT * FROM kiwi_products where status='Active' ";
        if (isset($store_id) && $store_id != '') {
            $querys .= " AND user_id='" . $store_id . "' ";
        }
        if (isset($product_category_id) && $product_category_id != '') {
            $querys .= " AND cid='$product_category_id' ";
        }
        
        $querys .= "  order by id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data               = array();
                //echo '<pre>';print_r($row);exit;
                $data["product_id"] = $row["id"];
                $data["name"]       = $row["web_title"];
                $data["content"]    = $row["web_content"];
                $data["image"]      = $row["web_image"];
                $data["image_url"]  = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                $data["price"]      = $row["price"];
                $data["variation"]  = $row["variation"];
                $result_arr[]       = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    public function getProductsSubCategoryWise($inputs)
    {
        
        $result_arr              = array();
        $store_id                = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $product_category_id     = (isset($inputs['product_category_id']) && $inputs['product_category_id'] != '') ? $inputs['product_category_id'] : '';
        $product_sub_category_id = (isset($inputs['product_sub_category_id']) && $inputs['product_sub_category_id'] != '') ? $inputs['product_sub_category_id'] : '';
        
        $querys = "SELECT * FROM kiwi_products where status='Active' ";
        if (isset($store_id) && $store_id != '') {
            $querys .= " AND user_id='" . $store_id . "' ";
        }
        if (isset($product_category_id) && $product_category_id != '') {
            $querys .= " AND cid='$product_category_id' ";
        }
        if (isset($product_sub_category_id) && $product_category_id != '') {
            $querys .= " AND scid='$product_sub_category_id' ";
        }
        
        $querys .= "  order by id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data               = array();
                //echo '<pre>';print_r($row);exit;
                $data["product_id"] = $row["id"];
                $data["name"]       = $row["web_title"];
                $data["content"]    = $row["web_content"];
                $data["image"]      = $row["web_image"];
                $data["image_url"]  = "http://bonda.co.in/admin/webupload/original/" . $row["web_image"];
                $data["price"]      = $row["price"];
                $data["variation"]  = $row["variation"];
                $result_arr[]       = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    
    
    
    public function getCartWeight($inputs)
    {
        
        $return     = 1;
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $product_id = (isset($inputs['product_id']) && $inputs['product_id'] != '') ? $inputs['product_id'] : '';
        
        $sql = "SELECT weight  FROM cart where user_id='$user_id' AND product_id='$product_id' limit 1";
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
            $no_of_rows = mysql_num_rows($result);
            if ($no_of_rows > 0) {
                $row    = mysql_fetch_array($result);
                $return = $row['weight'];
            }
            
        }
        
        return $return;
    }
    
    public function getStoreRatingById($store_id)
    {
        
        $return     = 0;
        
        $sql = "SELECT *  FROM store_review where store_id='$store_id' ";
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
            $no_of_rows = mysql_num_rows($result);
            if ($no_of_rows > 0) {
                $tot = 0;
               while($row= mysql_fetch_array($result)){
                   $tot += $row['rating'];
               }
                $return = $tot/$no_of_rows;
            }
            
        }
        return number_format($return, 1);
    }
    
    public function getCartQty($inputs)
    {
        
        $return     = 0;
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $product_id = (isset($inputs['product_id']) && $inputs['product_id'] != '') ? $inputs['product_id'] : '';
        
        $sql = "SELECT qty  FROM cart where user_id='$user_id' AND product_id='$product_id' limit 1";
        //echo $sql;exit;
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
            $no_of_rows = mysql_num_rows($result);
            if ($no_of_rows > 0) {
                $row    = mysql_fetch_array($result);
                $return = $row['qty'];
            }
            
        }
        
        return $return;
    }
    
    public function insertOrder($inputs)
    {
           
        
        $result_arr = array();
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $store_id = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $name = (isset($inputs['name']) && $inputs['name'] != '') ? $inputs['name'] : '';
        $phone = (isset($inputs['phone']) && $inputs['phone'] != '') ? $inputs['phone'] : '';
        $address = (isset($inputs['address']) && $inputs['address'] != '') ? $inputs['address'] : '';
        $address = (isset($inputs['address']) && $inputs['address'] != '') ? $inputs['address'] : '';
        $latitude = (isset($inputs['latitude']) && $inputs['latitude'] != '') ? $inputs['latitude'] : '';
        $longitude = (isset($inputs['longitude']) && $inputs['longitude'] != '') ? $inputs['longitude'] : '0';
        $zipcode = (isset($inputs['zipcode']) && $inputs['zipcode'] != '') ? $inputs['zipcode'] : '0';
        $amount = (isset($inputs['amount']) && $inputs['amount'] != '') ? $inputs['amount'] : '0';
        $coupons = (isset($inputs['coupons']) && $inputs['coupons'] != '') ? $inputs['coupons'] : '0';
        $shipping_charge = (isset($inputs['shipping_charge']) && $inputs['shipping_charge'] != '') ? $inputs['shipping_charge'] : '0';
        $status = '1';
        $order_status =  '0';
        $payment_status = (isset($inputs['payment_status']) && $inputs['payment_status'] != '') ? $inputs['payment_status'] : 'unpaid';
        $payment_type = (isset($inputs['payment_type']) && $inputs['payment_type'] != '') ? $inputs['payment_type'] : 'online';
        $items= (isset($inputs['items']) && $inputs['items'] != '') ? $inputs['items'] : array();
        $ordered_date = date("Y-m-d H:i:s");
        
        
        $sql = "INSERT INTO orders set user_id='$user_id' ,
                                        store_id='$store_id' ,
                                        name='$name' ,
                                        phone='$phone' ,
                                        address='$address' ,
                                        latitude='$latitude' ,
                                        longitude='$longitude' ,
                                        zipcode='$zipcode' ,
                                        amount='$amount' ,
                                        coupons='$coupons' ,
                                        shipping_charge='$shipping_charge' ,
                                        status='$status' ,
                                        order_status='$order_status' ,
                                        payment_status='$payment_status' ,
                                        payment_type='$payment_type' ,
                                        ordered_date='$ordered_date',
                                        created_date='$ordered_date',
                                        order_date='$ordered_date' ";
        //echo $sql;exit;
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
           $orders_id = mysql_insert_id();
           $total_amount = 0;
           if(count($items) > 0){
               foreach ($items as $value){
                   $product_id = $value['product_id'];
                   $product_name = $value['product_name'];
                   $price = $value['price'];
                   $qty = $value['qty'];
                   $weight = $value['weight'];
                   $total = $value['total'];
                   
                   $total_amount += $total;
                   
                    $sql1 = "INSERT INTO orders_items set orders_id='$orders_id' ,
                                        product_id='$product_id' ,
                                        product_name='$product_name' ,
                                        price='$price' ,
                                        qty='$qty' ,
                                        weight='$weight' ,
                                        total='$total' ";
                     mysql_query($sql1) or die(mysql_error());
                   
               }
               $order_id = "ORDER #".$orders_id;
               
               $sql = "UPDATE orders SET   order_id='$order_id'  where id=" . $orders_id;
               $res = mysql_query($sql) or die(mysql_error());
               
               
               
    
               
           }
           $this->clearCart($inputs);
            $sql = "SELECT *  FROM orders where id='$orders_id' limit 1";
            //echo $sql;exit;
            $result = mysql_query($sql) or die(mysql_error());
            if ($result) {
                $no_of_rows = mysql_num_rows($result);
                if ($no_of_rows > 0) {
                    $row    = mysql_fetch_array($result);
                    $result_arr = $row;
                }
                
            }
           
           return $result_arr; 
        }else{
            return false;
        }
        
        
    }
    
    
    
    
    public function getOrderList($inputs)
    {
        
        $result_arr              = array();
        $user_id                = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        
        $querys = "SELECT * FROM orders where 1";
        if (isset($user_id) && $user_id != '') {
            $querys .= " AND user_id='" . $user_id . "' ";
        }
        $querys .= "  order by id DESC ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data               = array();
                //echo '<pre>';print_r($row);exit;
                $data  = $row;
                
                $store_id = $row['store_id'];
                $where = " WHERE id = $store_id ";
                $data['image_url']  ="http://bonda.co.in/admin/webupload/original/" . $this->getnamewhere("kiwi_users","web_image",$where);
                $orders_id = $row['id'];
                $sql = "SELECT *  FROM orders_items where orders_id='$orders_id' ";
                $result1 = mysql_query($sql) or die(mysql_error());
                if ($result1) {
                    $no_of_rows1 = mysql_num_rows($result1);
                    $data_items               = array();
                    if ($no_of_rows1 > 0) {
                        while ($row1    = mysql_fetch_array($result1)) {
                            $data_items[] = $row1;
                            
                        }
                    }
                    
                    
                    
                        $data['items']  = $data_items;
                        $data['items']  = $data_items;
                    
                }
                
                
                $result_arr[]       = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    
    public function updateOrder($inputs)
    {
        
        $result_arr = array();
        
        $order_id    = (isset($inputs['order_id']) && $inputs['order_id'] != '') ? $inputs['order_id'] : '';
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $store_id = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $name = (isset($inputs['name']) && $inputs['name'] != '') ? $inputs['name'] : '';
        $phone = (isset($inputs['phone']) && $inputs['phone'] != '') ? $inputs['phone'] : '';
        $address = (isset($inputs['address']) && $inputs['address'] != '') ? $inputs['address'] : '';
        $status = (isset($inputs['status']) && $inputs['status'] != '') ? $inputs['status'] : 'order_placed';
        $payment_status = (isset($inputs['payment_status']) && $inputs['payment_status'] != '') ? $inputs['payment_status'] : 'unpaid';
        $payment_type = (isset($inputs['payment_type']) && $inputs['payment_type'] != '') ? $inputs['payment_type'] : 'online';
        $items= (isset($inputs['items']) && $inputs['items'] != '') ? $inputs['items'] : array();
        $ordered_date = date("Y-m-d H:i:s");
        
        $sql = "UPDATE orders SET ";
            if($status != '') 
                $sql .=" status='$status', ";
            if($payment_status != '') 
                $sql .=" payment_status='$payment_status', ";
            
            $sql .=" user_id= '$user_id' where id=" . $order_id;
        
        $res = mysql_query($sql) or die(mysql_error());
        
        if ($res) {
            $sql3 = "SELECT * FROM orders where id='$order_id' limit 1";
            $result3 = mysql_query($sql3) or die(mysql_error());
            if ($result3) {
                $row3              = mysql_fetch_array($result3);
                $result_arr        = $row3;
                $msg               = "Order Details Updated";
                $result_arr['msg'] = $msg;
            }
            
        } else {
            $msg                         = "Order Details Update Failed";
            $result_arr['msg']           = $msg;
            
        }
        
        return $result_arr;
        
    }
    
    public function insertReview($inputs)
    {
        
        $result_arr = array();
        $user_id    = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $store_id = (isset($inputs['store_id']) && $inputs['store_id'] != '') ? $inputs['store_id'] : '';
        $rating = (isset($inputs['rating']) && $inputs['rating'] != '') ? $inputs['rating'] : '';
        $order_id = (isset($inputs['order_id']) && $inputs['order_id'] != '') ? $inputs['order_id'] : '';
        $items= (isset($inputs['items']) && $inputs['items'] != '') ? $inputs['items'] : array();
        $date_added = date("Y-m-d H:i:s");
        
        
        $sql = "INSERT INTO store_review set user_id='$user_id' ,
                                        store_id='$store_id' ,
                                        rating='$rating' ,
                                        order_id='$order_id' ,
                                        date_added='$date_added' ";
        //echo $sql;exit;
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
           $id = mysql_insert_id();
            $sql1 = "SELECT *  FROM store_review where id='$id' limit 1";
            //echo $sql1;exit;
            $result1 = mysql_query($sql1) or die(mysql_error());
            if ($result1) {
                $no_of_rows = mysql_num_rows($result1);
                if ($no_of_rows > 0) {
                    $row    = mysql_fetch_array($result1);
                    $result_arr = $row;
                }
                
            }
           
          
        }
         return $result_arr; 
        
    }
    
    
    
    
    
    
    public function getOrderDetailsById($inputs)
    {
        
        $result_arr              = array();
        $user_id                = (isset($inputs['user_id']) && $inputs['user_id'] != '') ? $inputs['user_id'] : '';
        $id                = (isset($inputs['id']) && $inputs['id'] != '') ? $inputs['id'] : '';
        
        $querys = "SELECT * FROM orders where 1";
        if (isset($user_id) && $user_id != '') {
            $querys .= " AND user_id='" . $user_id . "' ";
        }
        if (isset($id) && $id != '') {
            $querys .= " AND id='" . $id . "' ";
        }
        $querys .= "  order by id asc ";
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                $data               = array();
                //echo '<pre>';print_r($row);exit;
                $data  = $row;
                $deliveryboy_id = $row['deliveryboy_id'];
                $deliveryboy_name = '';
                $deliveryboy_phone = '';
                if($deliveryboy_id > 0){
                    
                    $where = " WHERE user_id = $deliveryboy_id ";
                    $deliveryboy_name = $this->getnamewhere("userdetails","user_name",$where);
                    $deliveryboy_phone =  $this->getnamewhere("userdetails","user_number",$where);
                }
                $data["deliveryboy_name"]  = $deliveryboy_name;
                $data["deliveryboy_phone"]  = $deliveryboy_phone;
                
                $orders_id = $row['id'];
                $sql = "SELECT *  FROM orders_items where orders_id='$orders_id' ";
                $result1 = mysql_query($sql) or die(mysql_error());
                if ($result1) {
                    $no_of_rows1 = mysql_num_rows($result1);
                    $data_items               = array();
                    if ($no_of_rows1 > 0) {
                        while ($row1    = mysql_fetch_array($result1)) {
                            $data_items[] = $row1;
                        }
                    }
                    
                    
                    
                        $data['items']  = $data_items;
                    
                }
                
                
                $result_arr       = $data;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    public function isStoreOpen($open_time,$close_time)
    {
        
        $return              = 0;
       $open_time_24 = date("H:i", strtotime($open_time));
        $close_time_24 = date("H:i", strtotime($close_time));
        $current_24 = date("H:i");
        
        if ($open_time_24 < $current_24 && $close_time_24 > $current_24) {
           $return = 1;
        }
        
        return $return;
        
    }
    
   
   
    
    public function getZipcode()
    {
        
        $result_arr              = array();
       
        
        $querys = "SELECT * FROM zipcode where 1 AND status = '1'";
        $querys .= "  order by id asc "; 
        
        $result = mysql_query($querys) or die(mysql_error());
        
        if (mysql_num_rows($result) > 0) {
            
            while ($row = mysql_fetch_array($result)) {
                
                
                $result_arr[]   = $row;
            }
        }
        
        
        return $result_arr;
        
    }
    
    
    function getnamewhere($tabname,$name,$where)     // pass the table name , name of field to return all the values
	{

					$qry="SELECT $name FROM $tabname $where";
					//echo $qry;
					$result=mysql_query($qry);
					$num=mysql_num_rows($result);
					$i=0;
					$varname = '';
					if($num>0)
					{
						while($row = mysql_fetch_assoc($result)) {					   
						   $varname = $row[$name]; 
						}
						//$varname=mysqli_result($result,$i,$name);
						
					}
					return $varname;

	}
    
    
} //main end

?>