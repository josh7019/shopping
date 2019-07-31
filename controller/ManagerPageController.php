<?php
    require_once('../smarty/smarty_init.php');
    require_once('../model/all.php');
    
    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    } else {
        $action = 'index';
    }
    new ManagerPageController($action);
    
    class ManagerPageController
    {
        public function __construct($action)
        {
            if (method_exists($this, $action)) {
                $this->$action();
            } else {
                $action = 'index';
                $this->$action();
            }
        }

        /*
         * 管理者登入頁面
         */
        public function login()
        {
            
            $smarty->display('../views/manager_login.html');
        }
        
        /*
         * 會員管理頁面
         */
        public function member()
        {
            $is_login = (checkToken()) ? false : true;
            $user_item = getToken();
            $smarty = new Smarty;
            $smarty->assign('permission', $user_item['permission']);
            $smarty->assign('is_login', $is_login);
            $smarty->display('../views/maneger_member.html');
        }
        
        /*
         * 產品管理頁面
         */
        public function product()
        {
            $is_login = (checkToken()) ? false : true;
            $user_item = getToken();
            $smarty = new Smarty;
            $smarty->assign('permission', $user_item['permission']);
            $smarty->assign('is_login', $is_login);
            $smarty->display('../views/manager_product.html');
        }
        
    }