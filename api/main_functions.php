<?php
class MainFunctions
{
    
    function __construct()
    {
        // include db handler
        require_once 'sub_functions.php';
        require_once 'config.php';
        
        
        
        $this->sub = new SubFunctions();
        if (isset($_POST['orderDetails']) && !empty($_POST['orderDetails'])) {
            $raw_data = json_decode($_POST['orderDetails'], true);
            //echo '<pre>';print_r($raw_data);echo '</pre>';
        } else {
            $raw_data = json_decode(file_get_contents('php://input'), true);
            /*if(is_array($raw_data) && count($raw_data) == 1) {
            $data = $raw_data[0];
            }*/
        } //print_r($raw_data); die;
        $data         = $raw_data;
        $this->action = isset($data['action']) ? $data['action'] : '';
        $this->data   = $data;
    }
    
    public function getAction()
    {
        return $this->action;
    }
    
    
    
    public function getCounselor()
    {
        // response Array
        $response = array(
            "status" => 'error',
            "result" => array()
        );
        
        $_POST  = $this->data;
        $inputs = $this->data;
        
        $error_msg = array();
        /*    if(empty($_POST['user_id'])) {
        $error_msg[] = "User id required";
        } 
        
        if(empty($_POST['shop_id'])) {
        $error_msg[] = "Shop Id required";
        }*/
        
        
        if (!empty($error_msg)) {
            $response['result'] = $error_msg;
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            $storecategoty = $this->sub->getCounselor($inputs);
            if ($storecategoty) {
                $response["status"] = 'success';
                $response["result"] = $storecategoty;
                header('Content-Type: application/json');
                echo json_encode($response);
            } else {
                $response["result"] = "Store Categoty not added. Please try again";
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
    }
    
        public function getStudent()
    {
        // response Array
        $response = array(
            "status" => 'error',
            "result" => array()
        );
        
        $_POST  = $this->data;
        $inputs = $this->data;
        
        $error_msg = array();
        /*    if(empty($_POST['user_id'])) {
        $error_msg[] = "User id required";
        } 
        
        if(empty($_POST['shop_id'])) {
        $error_msg[] = "Shop Id required";
        }*/
        
        
        if (!empty($error_msg)) {
            $response['result'] = $error_msg;
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            $storecategoty = $this->sub->getStudent($inputs);
            if ($storecategoty) {
                $response["status"] = 'success';
                $response["result"] = $storecategoty;
                header('Content-Type: application/json');
                echo json_encode($response);
            } else {
                $response["result"] = "Store Categoty not added. Please try again";
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
    }

    
    
    
}

$main_functions = New MainFunctions();
//$action         = $main_functions->getAction();
//echo $action;exit;
//Suganthianitha1
//dwell6587
//9940312269 
$action = $_REQUEST['action']; 
if ($action == '') {
    // response Array
    $response = array(
        "status" => 'error',
        "result" => array(
            "Invalid action"
        )
    );
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    if (isset($action) && $action == 'get_counselor') {
        $main_functions->getCounselor();
    } else if (isset($action) && $action == 'get_student') {
        $main_functions->getStudent();
    } else if (isset($action) && $action == 'check_otp') {
        $main_functions->checkOTP();
    } else if (isset($action) && $action == 'get_sub_category') {
        $main_functions->getSubCategory();
    } else if (isset($action) && $action == 'get_store') {
        $main_functions->getStore();
    } else if (isset($action) && $action == 'get_products') {
        $main_functions->getProducts();
    } else if (isset($action) && $action == 'get_products_category') {
        $main_functions->getProductsCategory();
    } else if (isset($action) && $action == 'get_products_sub_category') {
        $main_functions->getProductsSubCategory();
    } else if (isset($action) && $action == 'get_products_category_wise') {
        $main_functions->getProductsCategoryWise();
    } else if (isset($action) && $action == 'get_products_sub_category_wise') {
        $main_functions->getProductsSubCategoryWise();
    } else if (isset($action) && $action == 'get_banner') {
        $main_functions->getBanner();
    } else if (isset($action) && $action == 'user_update') {
        $main_functions->userUpdate();
    } else if (isset($action) && $action == 'add_cart') {
        $main_functions->addCart();
    } else if (isset($action) && $action == 'get_cart') {
        $main_functions->getCart();
    } else if (isset($action) && $action == 'clear_cart') {
        $main_functions->clearCart();
    } else if (isset($action) && $action == 'get_store_banner') {
        $main_functions->getStoreBanner();
    } else if (isset($action) && $action == 'insert_order') {
        $main_functions->insertOrder();
    } else if (isset($action) && $action == 'get_order_list') {
        $main_functions->getOrderList();
    } else if (isset($action) && $action == 'update_order') {
        $main_functions->updateOrder();
    } else if (isset($action) && $action == 'insert_review') {
        $main_functions->insertReview();
    } else if (isset($action) && $action == 'get_order_details_by_id') {
        $main_functions->getOrderDetailsById();
    } else if (isset($action) && $action == 'get_zipcode') {
        $main_functions->getZipcode();
    
    } else {
        $response = array(
            "status" => 'error',
            "result" => array(
                "Invalid action"
            )
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
?>