<?php
    
    require_once('../model/all.php');

    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    } else {
        $action = 'goIndex';
    }
    new ManagerController($action);

    class ManagerController
    {
        public function __construct($action)
        {
            $this->$action();
            // parent::__construct();
        }

        /*
         * 管理者登入
         */
        public function login()
        {
            $account = $_POST['account'];
            $password = $_POST['password'];
            $check_tool = new CheckTool;
            $is_format_right = $check_tool->checkLoginFormat($account, $password);
            ## 檢查格式
            if (!$is_format_right){
                $data=[
                    'alert' => '格式錯誤',
                ];
                echo json_encode($data);
            }
            
            $manager = new Manager;
            $manager_item = $manager->getAccount($account);
            ## 搜尋帳號
            if (isset($manager_item['account'])){
                if (password_verify($password, $manager_item['password'])) {
                    $token = produceToken();
                    $manager->addToken($account, $token);
                    setcookie('token', $token, time() + 3600);
                    $data=[
                        'alert' => '管理者登入成功',
                        'location' => 'PageController.php?action=index',
                    ];
                    echo json_encode($data);
                } else {
                    $data=[
                        'alert' => '密碼錯誤',
                    ];
                    echo json_encode($data);
                }
            }
        }

        public function addProduct()
        {
            
            $name = $_POST['name'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $descript = $_POST['descript'];
            $product = new Product;
            $is_success = $product->addProduct($name, $price, $status, $descript);
            $data = [
                'alert' => '新增產品成功',
                'location' => '../controller/managerpagecontroller.php?action=product'
            ];
            $product_item = $product->getNewProductId();
            uploadImage($product_item);
            echo json_encode($data);

        }
    }