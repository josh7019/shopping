<?php
    require_once('../model/user.php');
    require_once('../tools/CheckTool.php');

    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    } else {
        $action = 'login';
    }
    new UserController($action);

    class UserController
    {
        public function __construct($action)
        {
            $this->$action();
            // parent::__construct();
        }
        
        /*
         * 檢查帳號是否重複
         */
        public function checkAccount()
        {
            $account = $_POST['account'];
            $user = new User();
            $user_account = $user->getAccount($account);
            echo json_encode($user_account);
        }

        /*
         * 註冊
         */
        public function signup()
        {
            $account = $_POST['account'];
            $password = $_POST['password'];
            $id_number = $_POST['id_number'];
            $name = $_POST['name'];
            $check_tool = new CheckTool;
            $check_result = $check_tool->checkSignupFormat($account, $password, $name, $id_number);
            ## 判斷格式是否正確
            if (!$check_result) {
                $data=[
                    'alert' => '格式錯誤或帳號已存在',
                ];
                echo json_encode($data);
                exit();
            }
            $user = new User;
            $password = password_hash($password, PASSWORD_DEFAULT);
            $is_success = $user->signup($account, $password, $name, $id_number);
            if ($is_success) {
                $data=[
                    'alert' => '註冊成功',
                    'location' => '../controller/PageController.php?action=login',
                ];
            } else {
                $data=[
                    'alert' => '註冊失敗',
                ];
            }
            echo json_encode($data);
        }

        /*
         * 登入
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
            
            $user = new User;
            $user_item = $user->getAccount($account);
            ## 搜尋帳號
            if (isset($user_item['account'])){
                if (password_verify($password, $user_item['password'])) {
                    $token = produceToken();

                } else {
                    $data=[
                        'alert' => '密碼錯誤',
                    ];
                    echo json_encode($data);
                }
            }
            // echo json_encode($_POST);
        }

    }
