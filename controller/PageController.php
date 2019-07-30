<?php
    require_once('../smarty/smarty_init.php');

    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    } else {
        $action = 'index';
    }
        new PageController($action);
    
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
            $smarty = new Smarty;
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
         * 會員管理頁面
         */
        public function memberManage()
        {
            $smarty = new Smarty;
            $smarty->display('../views/member_manage.html');
        }
        /*
         * 產品管理頁面
         */
        public function productManage()
        {
            $smarty = new Smarty;
            $smarty->display('../views/product_manage.html');
        }
        /*
         * 頁面
         */
    }