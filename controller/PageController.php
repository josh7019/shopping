<?php
    require_once('../smarty/smarty_init.php');
    require_once('../model/all.php');
    
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
    $test='PageController';
    new $test($action);
    
    class PageController
    {
        public function __construct($action)
        {
            if (method_exists($this, $action)) {
                $this->$action();
            } else {
                $action = 'index';
                $this->$action();
            }
            // parent::__construct();
        }

        /*
         * 首頁
         */
        public function index()
        {
            $is_login = (checkToken()) ? false : true;
            $user_item = getToken();
            $product = new Product;
            $product_list = $product->getAllProductOnSale();
            $smarty = new Smarty;
            $smarty->assign('product_list', $product_list);
            $smarty->assign('permission', $user_item['permission']);
            $smarty->assign('is_login', $is_login);
            $smarty->display('../views/index.html');
        }

        /*
         * 註冊頁面
         */
        public function signup()
        {
            $smarty = new Smarty;
            $smarty->display('../views/signup.html');
        }

        /*
         * 登入頁面
         */
        public function login()
        {
            $smarty = new Smarty;
            $smarty->display('../views/login.html');
        }
        
        /*
         * 購物車頁面
         */
        public function shoppingCar()
        {
            $is_login = (checkToken()) ? false : true;
            $smarty = new Smarty;
            $smarty->assign('is_login', $is_login);
            $smarty->display('../views/shopping_car.html');
        }

        /*
         * 頁面
         */
        /*
         * 登出頁面
         */
        public function logout()
        {
            $smarty = new Smarty;
            $smarty->display('../views/logout.html');
        }
    }
    